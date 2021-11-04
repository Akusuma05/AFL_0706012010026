<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\HeadphoneController;
use App\Http\Controllers\ProjectController;
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

// Redirect
Route::get('/', function () {
    return redirect('/brand');
});

Route::resource('brand', BrandController::class);

Route::resource('headphone', HeadphoneController::class);
