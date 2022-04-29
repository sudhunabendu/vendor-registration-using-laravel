<?php

namespace App\Http\Controllers;

use DB;
use File;
use Session;
use Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        if(session()->get('AdminLoggedIn'))
        {
            return redirect()->to('/Admin/Dashboard');
        }
    }

    //
    public function AdminLoginView()
    {
        return view('Pages.Admin.Login');
    }

    //
    public function AdminLogin(Request $request)
    {
        $postData=$request->all();
        unset($postData['_token']);
        //print_r($postData); die();

        $userData =  DB::table('trans_user')
                        ->where('UserEmail', $request->txtEmail)
                        ->where('UserPassword', $request->txtPassword) 
                        ->get();
        //print_r($userData); die();

        if(sizeof($userData) > 0)
        {
            if($userData[0]->IsActive == 0)
            {
                return redirect('/Admin/Login')->with('error', 'Your account is deactivated.Please contact with Admin.');
            }
            else
            {
                \Session::put('AdminId', $userData[0]->UserId);
                \Session::put('AdminFullName', $userData[0]->UserFullName);
                \Session::put('AdminLoggedIn', true);
                return redirect('/Admin/Dashboard')->with('success', 'You have logged in successfully.');
            }
        }
        else
        {
            $errors['error'] = 'Admin crediantials mismatch';
            return redirect('/Admin/Login')->with('error', 'Failed to login :'.$errors['error']);
        }
    }

    //
    public function AdminLogout()
    {
        session()->invalidate();
        return redirect('/Admin/Login')->with('success', 'You have logged out successfully.');
    }

    //
    public function AdminDashboardView()
    {
        return view('Pages.Admin.Dashboard');
    }

    //
    public function AdminUserListView()
    {
        $data_user_list =  DB::table('trans_user')
                        ->select('trans_user.UserId', 'trans_user.UserFullName', 'trans_user.UserEmail', 'trans_user.UserPhone', 'trans_user.IsActive', 'lkp_role.RoleName')
                        ->join('lkp_role', 'trans_user.UserRoleId', 'lkp_role.RoleId', 'left')
                        ->where('trans_user.UserRoleId', '!=', 1) 
                        ->get()
                        ->toArray();
        //print_r($data_user_list); die;
        return view('Pages.Admin.UserList', ["data"=>$data_user_list]);
    }

    //
    public function UserStatusUpdate($UserID,$IsActive)
    {
        $StatusCode = ($IsActive == 1) ? 0 : 1;
        DB::update('update trans_user set IsActive = ? where UserId = ?',[$StatusCode,$UserID]);
        return redirect()->back()->with('success','Updated Successfully');
    }

}
