<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\photoController;
use App\Models\Photo;
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

Route::get('/', [PagesController::class, 'index'])
    ->name('index');

Route::get('/kontak-kami', [PagesController::class, 'contact_us'])
    ->name('contact_us');

Route::get('/tentang-kami', [PagesController::class, 'about_us'])
    ->name('about_us');

Route::get('/portfolio', [photoController::class, 'index'])
    ->name('portfolio');

Route::get('/admin', [PagesController::class, 'admin'])
    ->name('admin');

Route::get('/pricelist', [PagesController::class, 'pricelist'])
    ->name('pricelist');
