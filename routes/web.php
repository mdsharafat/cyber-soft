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

Route::group(['prefix' => 'C127Wp-aqlg-SZ'], function() {
    Auth::routes([
        'register' => false,
        'verify' => true,
        'reset' => false
    ]);
});

Route::get('/dashboard', 'Admin\AdminController@index');
Route::POST('/subscribe', 'Admin\SubscribeController@subscribe');
Route::get('/admin/subscriber-lists', 'Admin\SubscribeController@subscriberLists');
Route::POST('/contact', 'Admin\ContactController@contact');
Route::POST('/comment', 'Admin\CommentsController@comment');

Route::resource('admin/skills', 'Admin\\SkillsController');
Route::resource('admin/services', 'Admin\\ServicesController');
Route::get('/admin/company-profile', 'Admin\CompanyProfileController@index');
Route::get('/admin/company-profile/edit', 'Admin\CompanyProfileController@edit');
Route::PATCH('/admin/company-profile/update', 'Admin\CompanyProfileController@update');
Route::resource('admin/tags', 'Admin\\TagsController');
Route::resource('admin/categories', 'Admin\\CategoriesController');
Route::resource('admin/posts', 'Admin\\PostsController');
Route::get('/admin/posts/publish/{id}', 'Admin\PostsController@publishPost');