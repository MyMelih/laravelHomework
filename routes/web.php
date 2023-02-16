<?php

use App\Http\Controllers\EkleController;
use App\Http\Controllers\FirmaController;
use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('gibir');
})->name('gibir');

Route::get('/firma/list', function () {
    return view('list');
});

Route::get('/excel/indir', [FirmaController::class, 'indir'])->name('excel.indir');
Route::post('/excel/yukle', [FirmaController::class, 'excelYukle'])->name('excel.yukle');

Route::get('/firma/ekle', [EkleController::class, 'index']);
Route::post('/firma/ekle', [EkleController::class, 'ekle'])->name('firma.ekle');

Route::get('/firma/listele', [ListController::class, 'index'])->name('firma.listele');
Route::get('/firma/listele/data', [ListController::class, 'firmaListele'])->name('firma.listele.data');

Route::get('/firma/detay/{id}', [ListController::class, 'firmaDetay']);
Route::put('/firma/guncelle/{id}', [ListController::class, 'firmaGuncelle'])->name('firma.guncelle');

Route::delete('/firma/sil/{id}', [ListController::class, 'firmaSil']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
