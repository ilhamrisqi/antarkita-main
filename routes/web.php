<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\photoController;
use App\Http\Controllers\ProfileController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [PagesController::class, 'index'])
    ->name('index');

Route::get('/contact_us', [PagesController::class, 'contact_us'])
    ->name('contact_us');

Route::get('/about_us', [PagesController::class, 'about_us'])
    ->name('about_us');

Route::get('/portfolio', [photoController::class, 'index'])
    ->name('portfolio');

Route::get('/admin', [PagesController::class, 'admin'])
    ->name('admin');

Route::get('/pricelist', [PagesController::class, 'pricelist'])
    ->name('pricelist');


Route::get('/detail', [PagesController::class, 'detail'])
    ->name('detail');
require __DIR__.'/auth.php';
