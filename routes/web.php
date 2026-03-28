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

 Route::get('/stress', function () {
    $start = microtime(true);

    while (microtime(true) - $start < 0.2) {
        hash('sha256', random_bytes(32));
    }

    return 'ok';
});

 Route::get('/health', fn() => response()->json(['ok' => true]));
