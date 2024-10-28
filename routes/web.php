<?php

use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Website\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/work', [PageController::class, 'work'])->name('work');
Route::get('/work-details/{id}', [PageController::class, 'workDetails'])->name('work.details');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/branding', [PageController::class, 'branding'])->name('branding');
Route::get('/usability', [PageController::class, 'usability'])->name('usability');
Route::get('/technology', [PageController::class, 'technology'])->name('technology');
Route::get('/digital-marketing', [PageController::class, 'digitalMarketing'])->name('digital.marketing');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('admin/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/projects', [ProjectController::class, 'index'])->name('admin.projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('/projects/store', [ProjectController::class, 'store'])->name('admin.projects.store');
    Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::post('/projects/update', [ProjectController::class, 'update'])->name('admin.projects.update');
    Route::get('/projects/delete/{id}', [ProjectController::class, 'destroy'])->name('admin.projects.delete');
});
