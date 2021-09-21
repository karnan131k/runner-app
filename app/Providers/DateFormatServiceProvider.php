<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ConvertDateFormat;
class DateFormatServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('textMonthDateFormat',function(){
            return new ConvertDateFormat();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
