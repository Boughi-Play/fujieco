<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\NewsletterController;

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

Route::get('/', [WelcomeController::class, "index"])->name("welcome");

Auth::routes();

Route::get('/home', function() {
    return view('backend.home');
})->name('home')->middleware('auth');

//pdf

Route::get('/download_local', [PdfController::class, "download_local"]);

Route::get('/download_public', [PdfController::class, "download_public"]);

//resource

Route::resource("/agenda", AgendaController::class)->middleware("isConnected");

Route::resource("/blog", BlogController::class)->middleware("isConnected");

Route::resource("/video", VideoController::class)->middleware("isConnected");


Route::post("/newsletter", [NewsletterController::class, "store"]);