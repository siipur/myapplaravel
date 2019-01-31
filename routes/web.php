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

/*
Route::get ('/about', function (){
    return view('pages.about'); //buatlah file about.blade.php pada view/pages  
});
Route::get('/hai', function () {
    return "<h1>Hello Bro!</h1>";
});
// Contoh Dinamic Route
Route::get ('/user/{id}/{name}', function ($id,$name){
    return 'ini user '.$name.' dengan nomor id '.$id;   
});


Route::get ('/about', function (){
    return view('pages.about'); //buatlah file about.blade.php pada view/pages  
});
*/

// route ke controller (rekomendasi)
Route::get ('/', 'PagesController@index');
Route::get ('/about', 'PagesController@about');
Route::get ('/services', 'PagesController@services');