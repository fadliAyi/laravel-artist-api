<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('jsonSuccess', function(){
            return Response::json(\diagnosticSuccess());
        });
        Response::macro('jsonError', function($msg){
            return Response::json(\diagnosticError($msg), 500);
        });
    }
}
