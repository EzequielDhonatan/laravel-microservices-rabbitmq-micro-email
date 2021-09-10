<?php

use Illuminate\Support\Facades\Route;

use App\Jobs\Api\V1\Company\Created\CompanyCreatedJob;

Route::get( '/', function () {

    return response()->json( [ 'message' => 'success' ] );

}); //

Route::get( '/test', function () {

    CompanyCreatedJob::dispatch( 'Test@ezequieldhonatan.com.br' )->onQueue( 'queue_email' );

    return response()->json( [ 'message' => 'success' ] );

}); //
