<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'app' => 'Laravel AWS Deploy Lab',
        'deploy' => 'v2',
        'version' => env('APP_VERSION'),
        'instance' => gethostname(),
    ]);
 });

 Route::get('/health', fn() => response()->json(['ok' => true]));
