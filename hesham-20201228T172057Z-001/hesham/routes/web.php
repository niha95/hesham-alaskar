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
Route::view('test','admin.index');
Auth::routes();

//Route::get('/', 'site\SiteController@index');

Route::get('/', ['as' => 'site.home', 'uses' => 'site\PagesController@showHome']);
// Route::view('/','site.home');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
//Route::get('/', ['as' => 'site.home', 'uses' => 'site/SiteController@index']);
