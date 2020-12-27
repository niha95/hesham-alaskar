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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::view('test','admin.index');

Route::group(['prefix'=>'dashboard','as'=>'dashboard.'],function () {
    Route::view('login','admin.auth.login')->name('login');
    Route::middleware('admin')->namespace('Admin')->group(function () {
        Route::get('/','AdminController@dashboard');
        Route::resource('users', 'UserController');

        ##########################  rule module ##########################
        Route::resource('rules', 'RuleController');
        ##########################  end rule module ##########################

        ##########################  customer module ##########################
        Route::resource('customers', 'CustomertController');
        ##########################  end customer module ##########################

         ##########################  social module ##########################
         Route::resource('socials', 'SocialController');
         ##########################  end social module ##########################

         ##########################  misc module ##########################
         Route::resource('misc', 'MiscController');
         ##########################  end misc module ##########################

         ##########################  slider module ##########################
         Route::resource('sliders', 'SliderController');
         ##########################  end slider module ##########################

         ##########################  services module ##########################
         Route::resource('services', 'ServiceController');
         ##########################  end services module ##########################

         ##########################  consults module ##########################
         Route::resource('consults', 'ConsultController');
         ##########################  end consults module ##########################


        Route::resource('blogCategories', 'BlogCategoryController');
        Route::resource('blogs', 'BlogController');
        Route::patch('blog/publish/{blog}','BlogController@updateStatus')->name('blog.publish');
        Route::resource('tags', 'TagController');
    });
});
