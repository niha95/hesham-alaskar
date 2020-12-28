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
Route::get('service', ['as' => 'site.service', 'uses' => 'site\PagesController@showService']);
Route::get('about', ['as' => 'site.about', 'uses' => 'site\PagesController@showAbout']);


Route::post('/', ['as' => 'site.home', 'uses' => 'site\PagesController@contact'])->name('contact');
// Route::view('/','site.home');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

//Route::view('service','site.service');
//Route::get('/', ['as' => 'site.home', 'uses' => 'site/SiteController@index']);
