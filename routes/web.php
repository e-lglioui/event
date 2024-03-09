<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\TickitController;
use App\Http\Controllers\StatistiqueController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile', [ProfileController::class, 'role'])->name('devenir.organisateur');
  

});

// web.php
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('events', [EventController::class, 'valider'])->name('events.valider');
    Route::post('/accept-event/{id}', [EventController::class, 'accept'])->name('accept.event');
    Route::post('events/{id}', [EventController::class, 'reject'])->name('reject.event');
    Route::resource('categories', CategorieController::class);
    Route::resource ('statistics',StatistiqueController::class);
});


 Route::middleware(['auth', 'role:organisateur'])->prefix('organisateur')->group(function () {
    // Route::get('event', [EventController::class, 'event'])->name('events.event');
    Route::resource('event', EventController::class);
  
    Route::get('tickit', TickitController::class)->name('tickit.affiche');
});

require __DIR__.'/auth.php';