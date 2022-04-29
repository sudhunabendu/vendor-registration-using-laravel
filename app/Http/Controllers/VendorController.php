<?php

namespace App\Http\Controllers;

use DB;
use File;
// use Session;
use App\Models\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Illuminate\Support\Facades\Session;



class VendorController extends Controller
{
    //
    public function __construct()
    {       
        if(session()->get('VendorLoggedIn'))
        {
            return redirect()->to('/Vendor/Dashboard');
        }
    }

    //
    public function VSignUpView()
    {
        return view('Pages.VSignUp');
    }

    //
    public function VSignUp(Request $request)
    {
        $postData=$request->all();
        unset($postData['_token']);
        //print_r($postData); die();
        
        $userData =  DB::table('trans_user')
                        ->where('UserEmail', $request->txtEmail)
                        ->get();
        //print_r($userData); die();

        if(sizeof($userData) > 0)
        {
            return redirect('/VSignUp')->with('error', 'Email ID already exist! Please try with another Email ID.');
        }
        else
        {
            $id = DB::table('trans_user')->insertGetId([
                'UserFullName' => $request->txtFullName,
                'UserEmail' => $request->txtEmail,
                'UserPhone' => $request->txtPhone,
                'UserPassword' => Hash::make($request->txtPassword),
                'UserRoleId' => 2
            ]);
            
            if($id > 0)
            {
                return redirect('/VSignIn')->with('success', 'Vendor Registration successfully.');
            }
            else
            {
                return redirect('/VSignUp')->with('error', 'There is a issue with server, please try again later.');
            }

        }
    }
   
    //
    public function VSignInView()
    {
        return view('Pages.VSignIn');
    }



    // public function VSignIn(Request $request){
    //     $this->validate($request,[
    //         'UserEmail'=>'email|required|exists:users,email',
    //         'UserPassword'=>'required|min:4',
    //     ]);

    //     if(User::attempt(['UserEmail'=>$request->UserEmail,'UserPassword'=>$request->UserPassword,'IsActive'=>1])){
    //         Session::put('user',$request->UserEmail);

    //         if(Session::get('url.intended')){
    //             return Redirect::to(Session::get('url.intended'));
    //         }else{
    //             return redirect()->route('home')->with('success','Successfully Login');
    //         }
    //     }else{
    //         return back()->with('error','Invalid email & Password');
    //     }
    // }
    
    
    public function VSignIn(Request $request)
    {
        $postData=$request->all();
        unset($postData['_token']);

        $userData =  DB::table('trans_user')
                        ->where('UserEmail', $request->txtEmail)
                        ->where('UserPassword', $request->txtPassword) 
                        ->get();

        if(sizeof($userData) > 0)
        {
            if($userData[0]->IsActive == 0)
            {
                return redirect('/VSignIn')->with('error', 'Your account is deactivated.Please contact with Admin.');
            }
            else
            {
                \Session::put('VendorId', $userData[0]->UserId);
                \Session::put('VendorFullName', $userData[0]->UserFullName);
                \Session::put('VendorEmail', $userData[0]->UserEmail);
                \Session::put('VendorPhone', $userData[0]->UserPhone);
                \Session::put('VendorLoggedIn', true);
                return redirect('/Vendor/Dashboard')->with('success', 'You have logged in successfully.');
            }
        }
        else
        {
            $errors['error'] = 'Vendor crediantials mismatch';
            return redirect('/VSignIn')->with('error', 'Failed to login :'.$errors['error']);
        }
    } 
    
    
    public function VLogout()
    {
        session()->invalidate();
        return redirect('/VSignIn')->with('success', 'You have logged out successfully.');
    }   

    //
    public function VDashboardView()
    {
        return view('Pages.Vendor.Dashboard');
    }
     
    //
    public function VPasswordView()
    {
        return view('Pages.Vendor.Password');
    }

    //
    public function VUpdatePassword(Request $request)
    {
        $postData=$request->all();
        unset($postData['_token']);
        //print_r($postData); die();

        DB::update('update trans_user set UserPassword = ? where UserId = ?',[$request->txtPassword,$request->txtUserID]);
        return redirect()->back()->with('success','Updated Successfully');   
    }

    //
    public function VProfileView()
    {
        $data_user_profile =  DB::table('trans_user')
                        ->select('trans_user.UserFullName', 'trans_user.UserPhone')
                        ->where('trans_user.UserId', session()->get('VendorId')) 
                        ->get()
                        ->toArray();
                        //print_r($data_user_profile); die;
        return view('Pages.Vendor.Profile', ["data"=>$data_user_profile]);      
    }

    //
    public function VUpdateProfile(Request $request)
    {
        $postData=$request->all();
        unset($postData['_token']);
        //print_r($postData); die();

        DB::update('update trans_user set UserFullName = ?, UserPhone = ? where UserId = ?',[$request->txtFullName,$request->txtPhone,$request->txtUserID]);
        return redirect()->back()->with('success','Updated Successfully');   
    }    
}
