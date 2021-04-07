<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class,'index']);

Route::get('/alec', [AlecController::class,'alec']);

Route::get('/insititutions', [InsititutionController::class,'insititution']);
