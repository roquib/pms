<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //

        Gate::define("isAdmin", function ($user) {
            return $user->role == 'admin';
        });
        // define a author user role
        // returns true if user role is set to author
        Gate::define('isSubAdmin', function ($user) {
            return $user->role == 'subadmin';
        });

        // define a author user role
        // returns true if user role is set to author
        Gate::define('isUser', function ($user) {
            return $user->role == 'user';
        });
        Gate::define('isDoctor', function ($user) {
            return $user->role == 'doctor';
        });
    }
}
