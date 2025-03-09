<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\NewCharacterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'showCount'])->name('welcome');

//Route::get('/dashboard', [DashboardController::class, 'showId'])->name('dashboard');
Route::get('/dashboard/{id}', [DetailsController::class, 'showDetails'])->middleware(['auth', 'verified'])->name('details');

Route::get('/dashboard/{id}/edit', [EditController::class, 'characterDetails'])->middleware(['auth', 'verified'])->name('edit');

Route::put('/dashboard/{id}', [EditController::class, 'characterUpdate'])->middleware(['auth', 'verified'])->name('update');

Route::get('/dashboard/{id}/newcharacter', [NewCharacterController::class, 'characterMakeView'])->middleware(['auth', 'verified'])->name('newCharacter');

Route::put('/dashboard', [NewCharacterController::class, 'characterMake'])->middleware(['auth', 'verified'])->name('new');


Route::get('/dashboard', [DashboardController::class, 'listCharacters'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
