<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//Default Controller
Route::get('/', 'HomeController@home')->name('index');
Route::post('/home/proccess/{any?}', 'HomeController@postProccess');

Route::group(['prefix' => 'du-an-phan-phoi'], function () {
//	Route::get('/', 'HomeController@listProject')->name('listProject');
	Route::get('/{alias}', 'HomeController@projects')->name('projects');
});

Route::group(['prefix' => 'tin-tuc'], function () {
	Route::get('/', 'HomeController@listNews')->name('listNews');
	Route::get('{categoryAlias}/{alias?}', 'HomeController@news')->name('news');
//	Route::get('tuyen-dung/{alias}', 'HomeController@recruitmentDetail')->name('recruitment.detail');
//	Route::get('tin-noi-bo/{alias}', 'HomeController@internalNewsDetail')->name('internal.detail');
//	Route::get('cap-nhat-tien-do-du-an', 'HomeController@processProjectNews')->name('news.process');
//	Route::get('cap-nhat-tien-do-du-an/{alias}', 'HomeController@processProjectNewsDetail')->name('process.detail');
//	Route::get('/tin-tuc-du-an', 'HomeController@projectNews')->name('newsProject');
//	Route::get('/tin-tuc-du-an/{alias}', 'HomeController@subProjectNews')->name('newsOther');
//	Route::get('/tin-tuc-du-an/project/sub/detail', 'HomeController@projectNewsDetail')->name('news.project.detail');
});

Route::get('lien-he', 'HomeController@contact')->name('contact');
Route::post('lien-he', 'HomeController@getContact')->name('store.contact');

/* Auth & Profile */
Route::get('user/profile','UserController@getProfile');
Route::get('user/login','UserController@getLogin');
Route::get('user/register','UserController@getRegister');
Route::get('user/logout','UserController@getLogout');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/reset/{any?}','UserController@getReset');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/activation','UserController@getActivation');
// Social Login
Route::get('user/socialize/{any?}','UserController@getSocialize');
Route::get('user/socialize/{any?}','UserController@getAutosocial');
//
Route::post('user/signin','UserController@postSignin');
Route::post('user/create','UserController@postCreate');
Route::post('user/saveprofile','UserController@postSaveprofile');
Route::post('user/savepassword','UserController@postSavepassword');
Route::post('user/doreset/{any?}','UserController@postDoreset');
Route::post('user/request','UserController@postRequest');

/* Posts & Blogs */
Route::get('post','PostController@getIndex');
Route::get('post/view/{id?}/{alias}','PostController@getView');
Route::get('post/label/{id?}','PostController@getLabel');
Route::get('post/remove/{id?}/{id2?}/{id3?}','PostController@getRemove');
Route::post('post/comment','PostController@postComment');

// Start Routes for Notification 
Route::get('notification/load','NotificationController@getLoad');
Route::get('notification','NotificationController@getIndex');
Route::get('notification/show/{any?}','NotificationController@getShow');
Route::get('notification/update/{any?}','NotificationController@getUpdate');
Route::get('notification/comboselect','NotificationController@getComboselect');
Route::get('notification/download','NotificationController@getDownload');
Route::get('notification/search','NotificationController@getSearch');
Route::get('notification/export/{any?}','NotificationController@getExport');
// -- Post Method --
Route::post('notification/save','NotificationController@postSave');
Route::post('notification/filter','NotificationController@postFilter');
Route::post('notification/delete/{any?}','NotificationController@postDelete');
// End Routes for faq 

Route::get('home/lang/{any}','HomeController@getLang');

include('pages.php');


Route::resource('sximoapi','SximoapiController');

// Routes for  all generated Module
include('module.php');
// Custom routes  
$path = base_path().'/routes/custom/';
$lang = scandir($path);
foreach($lang as $value) {
	if($value === '.' || $value === '..') {continue;} 
	include( 'custom/'. $value );	
	
}
// End custom routes
Route::group(['middleware' => 'auth'], function () {
	Route::resource('dashboard','DashboardController');
});

Route::group(['namespace' => 'Sximo','middleware' => 'auth'], function () {
	include('sximo.php');
});

Route::group(['namespace' => 'Core','middleware' => 'auth'], function () {

	include('core.php');

});

