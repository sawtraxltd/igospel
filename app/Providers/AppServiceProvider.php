<?php

namespace App\Providers;

use App\Mail\WebinarRegistrationMail;
use App\Models\Webinar;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Sending Webinar link to email  address on registration
        Webinar::created(function ($webinar){
            retry(5, function () use ($webinar){
                Mail::to($webinar)->send(new WebinarRegistrationMail($webinar));
            }, 100);
        });



    }
}
