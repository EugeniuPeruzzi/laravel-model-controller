<?php

use Illuminate\Support\Facades\Route;

// importo il controller
use App\Http\Controllers\Guest\PageController as PageController;


Route::get('/', [PageController::class, 'index']);

Route::get('/comics/{id}', [PageController::class , 'more']) -> name('more');