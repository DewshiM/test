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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['web']],function(){
    Route::resource('auction','AuctionController');
});

Auth::routes();

Route::get('home', 'HomeController@index');


Route::get('startAuction', 'AuctionController@index');
Route::post('insert_start_Auction', 'AuctionController@start_Auction');
Route::get('displayRunningAuc', 'AuctionController@displayRunning');

Route::get('/buyerAucHome', function () {
    return view('buyerAucHome');
});




/*
        extra to farmerAucHome
*/



Route::get('/farmerAucHome', function () {
    return view('farmerAucHome');
});

Route::get('/buyerAucFruit', function () {
    return view('buyerAucFruit');
});

Route::get('/buyerAucVeg', function () {
    return view('buyerAucVeg');
});

Route::get('/buyerAucDiary', function () {
    return view('buyerAucDiary');
});

Route::get('/buyerAucGrainary', function () {
    return view('buyerAucGrainary');
});



Route::get('/buyerBidProduct', function () {
    return view('buyerBidProduct');
});







