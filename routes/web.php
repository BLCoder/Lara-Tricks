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

Route::get('/', 'TricksController@index')->name('home');
Auth::routes();

Route::get('/home', 'TricksController@index')->name('home');
Route::get('tricks/{slug}', 'TricksController@single_trick_show');

Route::get('tags', 'TricksController@show_tags')->name('tags');
Route::get('categories', 'TricksController@show_category')->name('categories');
Route::get('tags/{id}', 'TricksController@show_tag_post');
Route::get('categories/{id}', 'TricksController@show_category_post');
Route::get('name/{id}', 'TricksController@show_profile');
Route::get('unsolve_trick', 'TricksController@show_unsolve_trick')->name('unsolve.tricks');

Route::get('popular', 'TricksController@popular_post')->name('popular');



Route::post('user/update/{id}', 'TricksController@profile_edit');
Route::post('user/tricks/new/{id}', 'TricksController@insert_trick');


Route::get('/search', 'SearchController@search')->name('search');



Route::post('/like','TricksController@postLikePost')->name('like');



Route::post('user/tricks/update/{id}', 'TricksController@update_trick');

Route::group(['middleware' => ['auth']], function () {
    Route::get('user/{id}', 'TricksController@user_tricks');
    Route::get('user/settings/{id}', 'TricksController@profile_settings');
    Route::get('user/favorites/{id}', 'TricksController@user_favorites');
    Route::get('user/tricks/new/{id}', 'TricksController@create_new_trick');
    Route::get('user/tricks/edit/{id}', 'TricksController@edit_trick');
    Route::get('user/tricks/delete/{id}', 'TricksController@delete_trick');
});








//Route::get('/live_search/action', 'TricksController@action')->name('live_search.action');

//Route::get('/live_search', 'TricksController@indexx');
//dynamic search using ajax request
Route::get('/live_search/action', 'TricksController@action')->name('live_search.action');





