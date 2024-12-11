<?php


use App\Http\Controllers\UploadFilesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UploadFilesController::class, 'showForm'])->name('upload.form');
Route::post('/upload', [UploadFilesController::class, 'upload'])->name('upload.handle');
Route::get('/images', [UploadFilesController::class, 'index'])->name('images.index');
Route::get('/photos', [UploadFilesController::class, 'showPhotos'])->name('photos.index');

Route::get('/photos/view/{storedName}', [UploadFilesController::class, 'viewPhoto'])->name('photos.view');