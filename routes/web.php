<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'app' => 'Laravel AWS Deploy Lab',
        'version' => env('APP_VERSION'),
        'instance' => gethostname(),
    ]);
});
