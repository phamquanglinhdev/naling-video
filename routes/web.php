<?php

use App\Http\Controllers\Client\VideoController;
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

Route::get('/', function () {
    return view('client.index');
})->name("index");
Route::get("/movies/{slug?}",[VideoController::class,"index","slug"])->where(["slug"])->name("movies");
