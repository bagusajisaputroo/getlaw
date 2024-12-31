<?php

use App\Http\Controllers\bookController;
use App\Http\Controllers\lembagaController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\LegalAidController;
use Illuminate\Support\Facades\Route;


Route::get('/legal-aid', [LegalAidController::class, 'create'])->name('legal-aid.create');
Route::post('/legal-aid', [LegalAidController::class, 'store'])->name('legal-aid.store');
Route::get('/legal-aid/requests', [LegalAidController::class, 'index'])->name('legal-aid.index');
Route::get('/legal-aid/requests/{id}', [LegalAidController::class, 'show'])->name('legal-aid.show');
Route::get('/', [newsController::class, 'index'])->name('homepage');

Route::get('/lembaga', [lembagaController::class, 'index'])->name('lembaga');

Route::get('/book', [bookController::class, 'index'])->name('book');

Route::get('/news', [newsController::class, 'getallcat'])->name('news');

Route::get('/news/{id}', [newsController::class, 'show'])->name('news.show');


