<?php

use App\Http\Controllers\Website\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/work', [PageController::class, 'work'])->name('work');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/branding', [PageController::class, 'branding'])->name('branding');
Route::get('/usability', [PageController::class, 'usability'])->name('usability');
Route::get('/technology', [PageController::class, 'technology'])->name('technology');
Route::get('/digital-marketing', [PageController::class, 'digitalMarketing'])->name('digital.marketing');
