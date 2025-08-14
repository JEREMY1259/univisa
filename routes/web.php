<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\CursoController;

Route::resource('cursos', CursoController::class);
Route::get('/login', function () {
    return view('login');
})->name('login');
