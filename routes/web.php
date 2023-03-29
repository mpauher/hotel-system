<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeWebController;
use App\Http\Controllers\AmenitiesWebController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// ROUTES TYPES
Route::get('/types',[TypeWebController::class,'index'])->name('type.index');
Route::get('/types/new',[TypeWebController::class,'new'])->name('type.new');
Route::post('/types/create',[TypeWebController::class,'create'])->name('type.create');
Route::get('/types/{id}/put',[TypeWebController::class,'put'])->name('type.put');
Route::patch('types/update',[TypeWebController::class,'update'])->name('type.update');
Route::delete('/types/{id}/delete',[TypeWebController::class,'delete'])->name('type.delete');

//ROUTES AMENITIES
Route::get('/amenities',[AmenitiesWebController::class,'index'])->name('amenitie.index');
Route::get('/amenities/new',[AmenitiesWebController::class,'new'])->name('amenitie.new');
Route::post('/amenities/create',[AmenitiesWebController::class,'create'])->name('amenitie.create');
Route::get('/amenities/{id}/put',[AmenitiesWebController::class,'put'])->name('amenitie.put');
Route::patch('amenities/update',[AmenitiesWebController::class,'update'])->name('amenitie.update');
Route::delete('/amenities/{id}/delete',[AmenitiesWebController::class,'delete'])->name('amenitie.delete');


require __DIR__.'/auth.php';