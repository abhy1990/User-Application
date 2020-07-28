<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('register', function () {
    return view('register');
});


Route::post('login', 'LoginController@login');

Route::post('registration', 'RegistrationController@register');

Route::get('logout', 'LoginController@logout');

////////////////////User Controller/////////////////////

Route::get('user/profile', 'user\UserController@profile');

Route::post('user/edit_user', 'user\UserController@edit_user');


////////////////////////Admin Controller/////////////////////
Route::get('admin/dashboard', 'admin\UserController@dashboard');

Route::get('admin/all_users', 'admin\UserController@all_users');

Route::get('admin/deactivate/{id}','admin\UserController@deactivate');

Route::get('admin/activate/{id}','admin\UserController@activate');