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
            return $user->role->name == 'admin';
        });
        // define a author user role
        // returns true if user role is set to author
        Gate::define('isTestAdmin', function ($user) {
            return $user->role->name == 'testadmin';
        });

        // define a author user role
        // returns true if user role is set to author
        Gate::define('isBillAdmin', function ($user) {
            return $user->role->name == 'billadmin';
        });
        Gate::define('isHelpDesk', function ($user) {
            return $user->role->name == 'helpdesk';
        });
        Gate::define('isDoctorAdmin', function ($user) {
            return $user->role->name == 'doctoradmin';
        });
    }
}
