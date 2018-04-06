<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;

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

// Route::match(['GET', 'POST'], '/{pagename}', function ($pagename) {
//   Route::current()->name('page-'. $pagename);
//   echo "<pre>"; print_r(route('page', ['id' => 1, 'slug' => 'title-slug'])); echo "</pre>";
//
//   return (View::exists($pagename)) ? view($pagename) : abort(404);
// })->name('page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('/admin')->group(function () {
  Route::get('/', 'AdminPageController@index')->name('admin.dashboard');
});

Route::prefix('/')->group(function () {
  Route::match(['GET', 'POST'], '/{pagename}', 'Listings\PageController@index');
});

Route::get('/', function () {
    return view('welcome');
});


// Route::resource('photos', 'PhotoController')->only([
//     'index', 'show'
// ]);
//
// Route::resource('photos', 'PhotoController')->except([
//     'create', 'store', 'update', 'destroy'
// ]);
