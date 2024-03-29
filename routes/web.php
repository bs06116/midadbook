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
Route::get('/foo', function(){
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
            Artisan::call('route:clear');
return 'success';
});

Route::get('/', 'HomeController@index');
Route::get('/post/create', 'PostController@create')->name('post/create');
Route::get('/user/login', 'AuthController@login')->name('user/login');
Route::get('/user/signup', 'AuthController@signup')->name('user/signup');
Route::get('/user/logout', 'AuthController@logout')->name('user/logout');

Route::get('/{username}', 'AuthController@profile')->name('user_profile');

Route::group(['middleware' => ['auth']], function () {
    Route::get('myprofile/edit', 'AuthController@myprofileEdit')->name('myprofile.edit');
});

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['prefix' => 'admin'], function() {

Auth::routes(['verify'=>true]);

});

Route::group(['prefix' => 'admin','namespace' => 'Admin', 'middleware' => ['auth','verified']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/components', function(){
        return view('components');
    })->name('components');


    Route::resource('users', 'UserController');

    Route::get('/profile/{user}', 'UserController@profile')->name('profile.edit');

    Route::post('/profile/{user}', 'UserController@profileUpdate')->name('profile.update');

    Route::resource('roles', 'RoleController')->except('show');

    Route::resource('permissions', 'PermissionController')->except(['show','destroy','update']);

    Route::resource('category', 'CategoryController')->except('show');

    Route::resource('post', 'PostController');

    Route::get('/activity-log', 'SettingController@activity')->name('activity-log.index');

    Route::get('/settings', 'SettingController@index')->name('settings.index');

    Route::post('/settings', 'SettingController@update')->name('settings.update');


    // Route::get('media', function (){
    //     return view('media.index');
    // })->name('media.index');
});
