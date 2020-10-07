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
    return view('glavniy');
})->name('glavniy');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact') ;
});

Route::post('/contact/submit', 'ContactController@submit');
Route::get('/contact/all', 'ContactController@all_data')->name('AllReviews');
Route::get('/contact/all/{id}', 'ContactController@MoreDetails')->name('MoreDetails');
Route::get('/contact/all/{id}/update', 'ContactController@UpdateReview')->name('UpdateReview');
Route::post('/contact/all/{id}/update', 'ContactController@UpdateReviewSubmit')->name('UpdateReviewSubmit');
Route::get('/contact/all/{id}/delete', 'ContactController@DeleteReview')->name('DeleteReview');


Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register') ;
});
Route::get('/logout','Auth\LoginController@logout');
Route::get('/search', 'ContactController@search');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
