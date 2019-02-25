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

Route::get('/', function() {
    return view('start');
})->name('start');

Route::get('/impressum', function() {
    return view('impressum');
})->name('impressum');

Route::get('/kontakt', function() {
    return view('kontakt');
})->name('kontakt');

Route::get('/kabinenwaechter', function() {
    return view('kabinenwaechter');
})->name('kabinenwaechter');

Route::get('/kontakt', 'ContactMessageController@index')->name('kontakt');
Route::post('/kontakt', 'ContactMessageController@post')->name('postContactMessage');

Route::get('/shop', 'ShopController@index')->name('shop');

Route::get('/systeme', function() {
    return view('systeme/index');
})->name('systeme');

Route::get('/systeme/dual-und-1-antennen-systeme', function() {
    return view('systeme/dual-und-1-antennen-systeme');
})->name('systeme/dual-und-1-antennen-systeme');

Route::get('/systeme/partner-im-handel', function() {
    return view('systeme/partner-im-handel');
})->name('systeme/partner-im-handel');

Route::get('/ueber-uns', function() {
    return view('ueber-uns');
})->name('ueber-uns');

