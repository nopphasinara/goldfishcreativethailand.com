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

Route::('/{pagename}', function ($pagename) {
  Route::current()->name('page-'. $pagename);
  return (View::exists($pagename)) ? view($pagename) : abort(404);
})->name('page');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::resource('photos', 'PhotoController')->only([
//     'index', 'show'
// ]);
//
// Route::resource('photos', 'PhotoController')->except([
//     'create', 'store', 'update', 'destroy'
// ]);
