<?php

namespace App\Http\Controllers;

use DB;
use File;
use Session;
use Validator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        // if(session()->get('AdminLoggedIn'))
        // {
        //     return redirect()->to('/Admin/Dashboard');
        // }
        // if(session()->get('VendorLoggedIn'))
        // {
        //     return redirect()->to('/Vendor/Dashboard');
        // }
    }

    //
    public function HomeView()
    {
        return view('Pages.Home');
    } 
}