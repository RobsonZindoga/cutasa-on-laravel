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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group([''], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
		Route::get('about', ['as' => 'pages.about', 'uses' => 'PageController@about']);
		Route::get('blog', ['as' => 'pages.blog', 'uses' => 'PageController@blog']);
		Route::get('events', ['as' => 'pages.events', 'uses' => 'PageController@events']);
		Route::get('sermons', ['as' => 'pages.sermons', 'uses' => 'PageController@sermons']);
		Route::get('contact', ['as' => 'pages.contact', 'uses' => 'PageController@contact']);
		Route::get('gallery', ['as' => 'pages.gallery', 'uses' => 'PageController@gallery']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
Route::resource('member', 'MemberController');
Route::get('member-dashboard', function(){
	return view('member.dashboard');
});
Route::get('member-login', 'MemberAreaController@loginview')->name('member_login_view');
// Route::post('member-login', 'MemberAreaController@login')->name('member_login');
Route::resource('admin-events','EventsController');
Route::resource('admin-blog','BlogPostController');
Route::resource('admin-sermons','SermonController');
Route::resource('admin-gallery','GalleryController');
Route::resource('admin-donations','DonationsController');
Route::resource('admin-category','CategoryController');