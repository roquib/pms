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
        Gate::define("isReception", function ($user) {
            return $user->role->name == 'reception';
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
        Gate::define('isMedicineAdmin', function ($user) {
            return $user->role->name == 'medicineadmin';
        });
        Gate::define('isDoctorAdmin', function ($user) {
            return $user->role->name == 'doctoradmin';
        });
    }
}
