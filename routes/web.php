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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','IndexController@index');
//Route Read More
Route::get('/readmore/{id}','ReadMoreController@index')->name('landingpage.readmore');
// Close Read More




// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/admin', 'AdminController@index')->name('admin');

// Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function (){
//     Route::get('/admin', 'AdminController@index')->name('admin');
    
// });
Auth::routes();
Route::group(['middleware' => ['admin']],function (){
    Route::get('/admin', 'AdminController@index')->name('admin');
    // Route::get('/admin/pelatihan','PelatihanController@index')->name('pelatihan');
    Route::get('/admin/addpelatihan','AddPelatihanController@index')->name('admin.addpelatihan');
    Route::post('/admin/addpelatihan','AddPelatihanController@store')->name('admin.addpelatihan.store');
    Route::get('/admin/pelatihan','AddPelatihanController@show')->name('admin.pelatihan.show');
    Route::get('/admin/pelatihan/destroy/{id}','AddPelatihanController@destroy')->name('admin.pelatihan.destroy');
    // Route::get('/admin/mainslider','AdminMainSliderController@index')->name('admin.mainslider');
    // Route::post('/admin/mainslider/store','AdminMainSliderController@store')->name('admin.mainslider.store');
    // Route::get('/admin/mainslider/destroy/{slug}','AdminMainSliderController@destroy')->name('admin.mainslider.destroy');
    // Route::get('/admin/mainslider/edit/{mainSlider}','AdminMainSliderController@edit')->name('admin.mainslider.edit');
    // Route::post('/admin/mainslider/update/{mainSlider}','AdminMainSliderController@update')->name('admin.mainslider.update');
});

