<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Pages.Home');
});
Route::get('/Home',[HomeController::class, 'HomeView'])->name('HomeView');


Route::get('/VSignUp',[VendorController::class, 'VSignUpView'])->name('VSignUpView');
Route::post('VSignUp', [VendorController::class, 'VSignUp'])->name('VSignUp');
Route::get('/VSignIn',[VendorController::class, 'VSignInView'])->name('VSignInView');
Route::post('VSignIn',[VendorController::class, 'VSignIn'])->name('VSignIn');
Route::get('VLogout', [VendorController::class, 'VLogout'])->name('VLogout');
Route::get('/Vendor/Dashboard',[VendorController::class, 'VDashboardView'])->name('VDashboardView');
Route::get('/Vendor/Password',[VendorController::class, 'VPasswordView'])->name('VPasswordView');
Route::post('VUpdatePassword',[VendorController::class, 'VUpdatePassword'])->name('VUpdatePassword');
Route::get('/Vendor/Profile',[VendorController::class, 'VProfileView'])->name('VProfileView');
Route::post('VUpdateProfile',[VendorController::class, 'VUpdateProfile'])->name('VUpdateProfile');


Route::get('/Admin/Login',[AdminController::class, 'AdminLoginView'])->name('AdminLoginView');
Route::post('AdminLogin', [AdminController::class, 'AdminLogin'])->name('AdminLogin');
Route::get('/Admin/Dashboard',[AdminController::class, 'AdminDashboardView'])->name('AdminDashboardView');
Route::get('AdminLogout', [AdminController::class, 'AdminLogout'])->name('AdminLogout');
Route::get('/Admin/UserList',[AdminController::class, 'AdminUserListView'])->name('AdminUserListView');
Route::get('/Admin/{userid}/{isactive}/UserStatusUpdate', [AdminController::class, 'UserStatusUpdate'])->name('UserStatusUpdate');