<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('posts', 'PostController@store');
Route::get('posts', 'PostController@showall');
Route::get('posts/{id}', 'PostController@showone');
Route::get('posts/{id}/sections', 'PostController@showsections');
Route::get('posts/{id}/sections/{sid}', 'PostController@showonesection');
Route::get('posts/{id}/files', 'PostController@showfiles');
Route::get('posts/{id}/files/{fid}', 'PostController@showonefile');
Route::get('posts/{id}/comments', 'PostController@showcomments');
Route::get('posts/{id}/comments/{cid}', 'PostController@showonecomment');
Route::put('posts/{id}', 'PostController@update');
Route::delete('posts/{id}', 'PostController@destroy');


Route::post('comments', 'CommentController@store');
Route::get('comments', 'CommentController@showall');
Route::get('comments/{id}', 'CommentController@showone');
Route::put('comments/{id}', 'CommentController@update');
Route::delete('comments/{id}', 'CommentController@destroy');

Route::post('sections', 'SectionController@store');
Route::get('sections', 'SectionController@showall');
Route::get('sections/{id}', 'SectionController@showone');
Route::put('sections/{id}', 'SectionController@update');
Route::delete('sections/{id}', 'SectionController@destroy');

Route::post('users', 'UserController@store');
Route::get('users', 'UserController@showall');
Route::get('users/{id}', 'UserController@showone');
Route::get('users/{id}/comments', 'UserController@showcomments');
Route::get('users/{id}/comments/{cid}', 'UserController@showonecomment');
Route::put('users/{id}', 'UserController@update');
Route::delete('users/{id}', 'UserController@destroy');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
