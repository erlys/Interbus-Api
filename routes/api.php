<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1/')->group(function () {
    Route::get('buses',  [BusController::class,    'index']);
    Route::post('ticket/validate', [TicketController::class, 'validateCode']);
    Route::post('ticket/mark', [TicketController::class, 'markTicket']);
    Route::post('login', [UserController::class, 'markTicket']);
});
