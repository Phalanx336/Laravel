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
    return '/route';
});

Route::get('hotels', function () {
    return '/hotels route';
});

route::group(['prefix'=>'reservations'], function(){
    route::get('/',function(){return "Showing users homepage";});
    route::get('reservations',function(){return "Showing users reservations";});
    route::get('reservations/{id}',function(){return "Showing reservation id";});
    route::get('reservations/{id}/edit',function(){return "Showing edit form for reservation id";});

    route::post('reservations',function(){return "Creating reservation";});

    route::put('reservations/{id}',function(){return "Updating reservation id";});

    route::delete('reservations/{id}',function(){return "deleting reservation id";});
});

