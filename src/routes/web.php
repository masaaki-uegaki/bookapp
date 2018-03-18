<?php

use App\Http\Controllers\Book;

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

Route::resource('/', 'BookController', ['only' => ['index']]);
Route::resources([
    'books' => 'BookController',
]);

Route::group(['middleware' => ['web']], function() {
    Route::auth();
});
