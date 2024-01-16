<?php

namespace Ophaant\Survey;

use Illuminate\Support\ServiceProvider;

class SurveyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/./../resources/views', 'survey');

        $this->publishes([
            __DIR__.'/./../database/migrations/' => database_path('migrations')
        ], 'survey-migrations');
    }

    public function register()
    {

    }
}
