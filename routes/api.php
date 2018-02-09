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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
