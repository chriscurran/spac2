<?php

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/newsletter', function () {
    return view('newsletter');
});

Route::get('/calendar', function () {
    return view('calendar');
});
Route::get('/viewing', function () {
    return view('viewing');
});

Route::get('/membership', "MemberController@membershipInfo");
Route::get('/member/edit', "MemberController@edit")->middleware('auth');
Route::post('/member/save', "MemberController@save")->middleware('auth');
Route::get('/member/joinRenew', "MemberController@joinRenew");
Route::get('/members', "MemberController@members")->middleware('member');

Route::get('/memberResources', "MemberController@resources");
Route::get('/copyMemberTableToUsers', "MemberController@copyMemberTableToUsers")->middleware('auth');
Route::get('/setUserPasswords', "MemberController@setUserPasswords");

Route::get('/contact', "ContactUsController@show");
Route::post('/contact', "ContactUsController@store");
Route::get('/contacted', "ContactUsController@contacted");

Route::get('/obs', "OBSController@obs");

Route::get('/admin', "AdminController@main")->middleware('admin');

Route::get('/paypal', "PayPal@get");
Route::post('/paypal', "PayPal@paypal_post");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
