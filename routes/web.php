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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('user/new', 'CustomerController@save')->name('new-user');
Route::get('user/information', 'CustomerController@information')->name('information');
Route::post('user/expense', 'ExpenseController@expense')->name('new-expense');

Route::get('pdfview',array('as'=>'pdfview','uses'=>'CustomerController@pdfview'));

