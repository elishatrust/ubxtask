<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcessBillController;
use App\Http\Controllers\DataImportController;


//Route::get('/pages/stage-1',[DataImportController::class,'get_data']);

Route::get('/', [DataImportController::class, 'index']);
Route::get('/pages/stage-0',[ProcessBillController::class,'processbill']);
Route::get('/pages/stage-1',[ProcessBillController::class,'data']);
Route::post('import', [DataImportController::class, 'store'])->name('import');
