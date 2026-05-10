<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\AgreementController;

Route::get('/', [AgreementController::class, 'create']);
Route::post('/preview', [AgreementController::class, 'preview'])->name('preview');
Route::get('/download', [AgreementController::class, 'download'])->name('download');