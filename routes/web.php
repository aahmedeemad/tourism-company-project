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
})->name('home');

Route::get('/allcustomers', function () {
    return view('allcustomers');
});

Route::get('/customerprofile', function () {
    return view('customerprofile');
})->name('customerprofile');

Route::get('/safe', function () {
    return view('safe');
});

Route::get('/tickets', function () {
    return view('tickets');
})->name('tickets');

Route::get('/alltickets', function () {
    return view('alltickets');
});

Route::get('/vieworderdetails', function () {
    return view('vieworderdetails');
})->name('vieworderdetails');

Route::get('/reports', function () {
    return view('reports');
});
Route::get('/addcustomer', function () {
    return view('addcustomer');
});

Route::get('/createticket', function () {
    return view('createticket');
})->name('createticket');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/allorders', 'OrderController@index')->name('allorders');
Route::get('order/delete/{id}', 'OrderController@destroy');
Route::get('/allrefundedtickets', 'RefundedTicketController@index')->name('allrefundedtickets');
