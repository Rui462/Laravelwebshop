<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TablaneveController;

Route::get('/tablaneve', [TablaneveController::class, 'index'])->name('tablaneve.index');
Route::post('/tablaneve', [TablaneveController::class, 'store'])->name('tablaneve.store');
