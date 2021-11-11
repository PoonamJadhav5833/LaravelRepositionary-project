<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Employee\EmployeeInterface;
use App\Repository\Employeet\EmployeeRepository;
use App\Repository\User\UserInterface;
use App\Repository\User\UserRepository;
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
        //
    }
}
