<?php

use App\Http\Controllers\MainSiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "HERE";
});

Route::get('/index', [MainSiteController::class, 'index'])->name('index');
