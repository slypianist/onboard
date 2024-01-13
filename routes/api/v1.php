<?php

use App\Http\Controllers\API\V1\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('test', [TestController::class, 'test']);

Route::middleware('auth:sanctum')->group(function(){


});
