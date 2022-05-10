<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('dashboardPermission', function($user){
            return $user->hasAnyRoles(['superadmin','admin']);
        });

        Gate::define('edit-user', function($user){
            return $user->hasAnyRoles(['superadmin', 'admin']);
        });

        Gate::define('delete-user', function($user){
            return $user->hasAnyRoles(['superadmin', 'admin']);
        });

        Gate::define('update-bal', function($user){
            return $user->hasRole('superadmin');
        });
    }
}
