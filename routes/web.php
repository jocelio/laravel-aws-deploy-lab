<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'app' => 'Laravel AWS Deploy Lab',
        'deploy' => 'teste de deploy',
        'version' => env('APP_VERSION'),
        'instance' => gethostname(),
    ]);
});
