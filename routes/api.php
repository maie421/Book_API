<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');
Route::get('user', 'AuthController@getAuthUser');
// Route::get('user/{id}', 'BookController@mybook');

Route::apiResource('books', 'BookController');
Route::patch('books/{book}/emotion', 'BookController@emotionupdate');
Route::post('books/ratings', 'RatingController@store');
Route::post('books/likes', 'LikeController@store');
Route::get('books/likes/{like}', 'LikeController@destroy');

