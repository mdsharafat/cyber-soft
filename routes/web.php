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

Route::get('/', 'Frontend\FrontendController@index');
Route::get('/posts', 'Frontend\FrontendController@posts');
Route::get('/single-post', 'Frontend\FrontendController@singlePost');
Route::get('/projects', 'Frontend\FrontendController@projects');