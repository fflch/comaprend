<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AlecController;
use App\Http\Controllers\InstitutionController;

Route::get('/', [IndexController::class,'index']);

Route::get('/alec', [AlecController::class,'alec']);

Route::get('/institutions', [InstitutionController::class,'index']);

# Now the route to create ?
Route::get('/institutions/create', [InstitutionController::class,'create']);
Route::get('/institutions/{institution}/edit', [InstitutionController::class,'edit']);

Route::post('/institutions', [InstitutionController::class,'store']);
Route::post('/institutions/{institution}', [InstitutionController::class,'update']);
Route::post('/institutions/{institution}/delete', [InstitutionController::class,'destroy']);




