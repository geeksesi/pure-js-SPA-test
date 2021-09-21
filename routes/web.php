<?php

use App\Http\Controllers\AnotherPage;
use App\Http\Controllers\Home;
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

Route::get('/', [Home::class, 'index']);
Route::get('/page1', [AnotherPage::class, 'p1']);
Route::get('/page2', [AnotherPage::class, 'p2']);
Route::get('/page3', [AnotherPage::class, 'p3']);
