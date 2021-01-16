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

// デフォルト
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'RecipeController@top');


// 確認メール許可しなければ登録できないようにする時に使う
// Auth::routes(['verify' => true]);