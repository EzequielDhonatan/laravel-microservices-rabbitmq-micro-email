<?php

use Illuminate\Support\Facades\Route;

use App\Jobs\Company\Created\WelcomeJob;

Route::get( '/', function () {

    return response()->json( [ 'message' => 'success' ] );

}); //

Route::get( '/test', function () {

    WelcomeJob::dispatch( 'Test@test.com' );

    return response()->json( [ 'message' => 'success' ] );

}); //
