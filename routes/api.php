<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->controller(UserController::class)->group(function () {
    Route::post('', 'authLogin');
});

Route::get('messages/all', [MessageController::class, 'list'])->middleware('auth:sanctum');

Route::apiResources([
    'events' => EventsController::class,
    'offers' => OfferController::class,
    'messages' => MessageController::class
]);


Route::get('messages/all', [MessageController::class, 'list'])->middleware('auth:sanctum');
