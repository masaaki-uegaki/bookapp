<?php

use App\Book;
use Illuminate\Http\Request;

App::setLocale('ja');
Config::set('app.timezone', 'Asia/Tokyo');

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

Route::resources([
    '/' => 'BookController',
    'books' => 'BookController',
]);

Route::group(['middleware' => ['web']], function() {
    Route::auth();
});
