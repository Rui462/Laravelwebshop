<?php
use App\Http\Controllers\API\ProductController;

Route::get('products', [ProductController::class, 'index']);
Route::post('products', [ProductController::class, 'store']);
