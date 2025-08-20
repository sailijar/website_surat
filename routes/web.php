<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\HomeController;

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




// Route::get('/surat', [SuratController::class, 'index'])->name('surat.index');
// Route::get('/surat/{id}', [SuratController::class, 'show'])->name('surat.show');
Route::get('/surat/{id}/pdf', [SuratController::class, 'exportPdf'])->name('surat.pdf');


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('penduduk', PendudukController::class);
Route::resource('template-surat', TemplateSuratController::class);
Route::resource('surat', SuratController::class);

Route::resource('surat', SuratController::class);




