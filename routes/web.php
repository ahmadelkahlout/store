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
Route::get('login','Authcontroller@login')->name('login');
Route::post('authenticate','Authcontroller@authenticate')->name('authenticate');
Route::get('logout','Authcontroller@logout')->name('logout');


Route::get('orm','Traincontroller@orm');
Route::get('train','Traincontroller@train');
Route::get('relationships','Traincontroller@relationships');
Route::get('poly_relationships','Traincontroller@poly_relationships');
Route::get('encrypt','Traincontroller@encrypt');







Route::namespace('dashboard')->name('Dashboard.')->prefix('admin')->group(function (){
    Route::get('/','dashboardcontroller@index');
    Route::resource('products','productcontroller');
    Route::resource('employees','employeecontroller');
    Route::resource('users','usercontroller');
    Route::resource('orders','ordercontroller');
    Route::resource('productlines','productlinecontroller');
    Route::resource('customers','customercontroller');
    Route::resource('offices','officecontroller');
    Route::resource('ordproducts','ordproductcontroller');










});


//اللي تحت هدول الكنترولر تاع الواجهات
Route::get('/','Publicconroller@showindex')->name('front.index');
Route::get('/about','Publicconroller@showabout')->name('front.about');
Route::get('/cart','Publicconroller@showcart')->name('front.cart');
Route::get('/checkout','Publicconroller@showcheckout')->name('front.checkout');
Route::get('/contact','Publicconroller@showcontact')->name('front.contact');
Route::get('/shop','Publicconroller@showshop')->name('front.shop');
Route::get('/single','Publicconroller@showsingle')->name('front.single');



//Route::resource('users','Dashboard\usercontroller');


