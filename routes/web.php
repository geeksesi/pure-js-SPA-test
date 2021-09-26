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

Route::get("/homejs", [Home::class, "index_js"])->name("home");
Route::get("/", [Home::class, "index"])->name("home");
Route::get("/page1", [AnotherPage::class, "p1"])->name("page1");
Route::get("/page2", [AnotherPage::class, "p2"])->name("page2");
Route::get("/page3", [AnotherPage::class, "p3"])->name("page3");
