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


Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/about/{slug?}', 'HomeController@about');
Route::get('/info-pages/{slug?}', 'HomeController@infoPages');
Route::get('/technics/{category}', 'HomeController@technics');
Route::get('/certificates', 'HomeController@certificates');

Route::get('/{page}', function($page){
   return view('pages.'.$page);
});
