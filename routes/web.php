<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'app' => 'Laravel AWS Deploy Lab',
        'deploy' => 'Teste de deploy aws ec2 pull',
        'version' => env('APP_VERSION'),
        'instance' => gethostname(),
    ]);
});
