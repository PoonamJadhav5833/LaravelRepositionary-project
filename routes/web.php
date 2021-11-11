<?php

use Illuminate\Support\Facades\Route;

Route::name('Employee.')->prefix('Employee')->namespace('Employee')->group(function (){
    Route::get('index','EmployeeController@index')->name('index');
    Route::post('store','EmployeeController@storeOrUpdate')->name('store');
    Route::get('view/{id}','EmployeeController@view')->name('view');
    Route::put('update/{id}','EmployeeController@storeOrUpdate')->name('update');
    Route::get('delete/{id}','EmployeeController@delete')->name('delete');
});

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
