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

Route::get('/', 'Frontend\FrontendController@index')->name('home');
Route::get('/posts', 'Frontend\FrontendController@posts');
Route::get('/post/{slug}', 'Frontend\FrontendController@singlePost');
Route::get('/category/{slug}', 'Frontend\FrontendController@postByCategory');
Route::get('/tag/{slug}', 'Frontend\FrontendController@postByTag');
Route::get('/projects', 'Frontend\FrontendController@projects');
Route::POST('/search-post', 'Frontend\FrontendController@searchPost');

Route::POST('/subscribe', 'Admin\SubscribeController@subscribe');
Route::POST('/contact', 'Admin\ContactController@contact');
Route::POST('/comment', 'Admin\CommentsController@comment');



Route::group(['prefix' => 'C127Wp-aqlg-SZ'], function() {
    Auth::routes([
        'register' => false,
        'verify' => true,
        'reset' => false
    ]);
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'Admin\AdminController@index');
    Route::get('/admin/subscriber-lists', 'Admin\SubscribeController@subscriberLists');
    Route::get('/admin/activate-subscriber/{id}', 'Admin\SubscribeController@activate');
    Route::get('/admin/deactivate-subscriber/{id}', 'Admin\SubscribeController@deactivate');
    Route::get('/admin/contact-messages', 'Admin\ContactController@index');
    Route::get('/admin/archived-contact-messages', 'Admin\ContactController@archivedMessages');
    Route::get('/admin/archive-message/{id}', 'Admin\ContactController@archive');
    Route::DELETE('/delete-contact-message/{id}', 'Admin\ContactController@destroy');
    Route::get('/admin/approve-comment/{id}', 'Admin\CommentsController@approveComment');
    Route::get('/admin/pending-comment/{id}', 'Admin\CommentsController@pendingComment');
    Route::get('/admin/pending-comments', 'Admin\CommentsController@pendingComments');
    Route::get('/admin/approved-comments', 'Admin\CommentsController@approvedComments');
    Route::DELETE('/delete-comment/{id}', 'Admin\CommentsController@destroy');

    Route::resource('admin/skills', 'Admin\\SkillsController');
    Route::resource('admin/services', 'Admin\\ServicesController');
    Route::get('admin/company-profile', 'Admin\CompanyProfileController@index');
    Route::get('/admin/company-profile/edit', 'Admin\CompanyProfileController@edit');
    Route::PATCH('/admin/company-profile/update', 'Admin\CompanyProfileController@update');
    Route::resource('admin/tags', 'Admin\\TagsController');
    Route::resource('admin/categories', 'Admin\\CategoriesController');
    Route::resource('admin/posts', 'Admin\\PostsController');
    Route::resource('admin/projects', 'Admin\\ProjectsController');
    Route::get('/admin/posts/publish/{id}', 'Admin\PostsController@publishPost');
    Route::get('admin/C127Wp-aqlg-SZ/change-my-password', 'Admin\UsersController@changeMyPassword');
    Route::POST('admin/C127Wp-aqlg-SZ/change-my-password', 'Admin\UsersController@changePasswordSubmit');
});