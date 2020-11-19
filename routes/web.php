<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\userProfileController;
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





Route::get('/profile', function () {
    return view('profile');
});

Route::get('/', 'FrontendController@homepage')->name('homepage');
Route::get('/test', 'FrontendController@test');
Route::get('/blog', 'FrontendController@blog')->name('blog');
Route::get('/singlepage', 'FrontendController@singlepage')->name('singlepage');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('user.home');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
});

Route::prefix('/admin')->namespace("Admin")->group(function () {
    Route::get('/', 'AdminController@loginView')->name('admin.login');
    Route::post('/', 'AdminController@login');
    Route::group(['middleware' => ['admin']], function () {
        Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
        Route::get('settings', 'AdminController@settings')->name('admin.settings');
        Route::post('check-current-pwd', 'AdminController@chkCurrentPwd');
        Route::post('update-pwd', 'AdminController@updatePwd');
        Route::post('update-profile-img', 'AdminController@updateProfileimg')->name('admin.profile.img');
        Route::get('logout', 'AdminController@logout')->name('admin.logout');

        Route::post('approve_user','AdminController@approveUser');
        Route::post('remove_user','AdminController@removeUser');
    });
});

// Route::get('/{id}', [userProfileController::class, 'show']);

Route::get('/{username}', [userProfileController::class, 'show']);

// Route::get('/ajax', function(){ return view('ajaxtest'); });



