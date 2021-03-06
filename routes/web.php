<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::get('/', [PageController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::get('/users', [PageController::class, 'products']);
});

Route::get('/news/{id}',  [PageController::class, 'news(id = $id)']);
