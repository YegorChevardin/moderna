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
    return view('main.template.index');
})->name('/');

Route::get('/about', 'AboutController@view')->name('about');

Route::get('/blog-single', 'Blog-singleController@view')->name('blog-single');

Route::get('/blog', 'BlogController@view')->name('blog');

Route::get('/contact', 'ContactController@view')->name('contact');

Route::get('/portfolio', 'PortfolioController@view')->name('portfolio');

Route::get('/services', 'ServicesController@view')->name('services');

Route::get('/team', 'TeamController@view')->name('team');