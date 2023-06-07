<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScreenshotController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/screenshot', 'ScreenshotController@capture');
Route::get('/screenshot',  [ScreenshotController::class, 'capture'])->name('screenshot.capture');
Route::get('/error',  [ScreenshotController::class, 'errorScreen']);
Route::get('/form',  [ScreenshotController::class, 'formScreen']);
Route::get('/canva', function () {
    return view('canva_edit_image');
});