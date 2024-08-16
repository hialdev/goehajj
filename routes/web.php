<?php

use App\Http\Controllers\LPController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::group(['prefix' => 'pakhaji'], function () {
    Voyager::routes();
});

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/news/{slug}', [PageController::class, 'newsShow'])->name('news.show');
Route::get('/{slug}', [LPController::class, 'index'])->name('landing');

