<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
//})->name('dashboard');
// Cambia la línea 7 de routes/admin.php a esto:
})->name('dashboard');