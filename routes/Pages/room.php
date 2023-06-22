<?php

use App\Http\Controllers\Pages\Room\RoomController;

Route::group([
    'as' => 'rooms.', 
    'prefix' => 'rooms', 
], function () {
    Route::get('index', [RoomController::class, 'index'])->name('index');
});