<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */

            public function boot()
            {
                $this->registerPolicies();

                // Gate untuk memeriksa apakah pengguna adalah super_admin
                Gate::define('super_admin', function ($user) {
                    return $user->statusadmin->statusadmin === 'super_admin'; // Cek apakah statusnya super_admin
                });

                // Gate untuk memeriksa apakah pengguna adalah pekerja
                Gate::define('admin', function ($user) {
                    return $user->statusadmin->statusadmin === 'admin'; // Cek apakah statusnya pekerja
                });

                // Gate untuk memeriksa apakah pengguna adalah pekerja
                Gate::define('pekerja', function ($user) {
                    return $user->statusadmin->statusadmin === 'pekerja'; // Cek apakah statusnya pekerja
                });

                // Gate untuk memeriksa apakah pengguna adalah pekerja
                Gate::define('supp_pabrik', function ($user) {
                    return $user->statusadmin->statusadmin === 'supp_pabrik'; // Cek apakah statusnya pekerja
                });

                // Gate untuk memeriksa apakah pengguna adalah pekerja
                Gate::define('supp_peralatan', function ($user) {
                    return $user->statusadmin->statusadmin === 'supp_peralatan'; // Cek apakah statusnya pekerja
                });

                // Gate untuk memeriksa apakah pengguna adalah pekerja
                Gate::define('supp_tokobangunan', function ($user) {
                    return $user->statusadmin->statusadmin === 'supp_tokobangunan'; // Cek apakah statusnya pekerja
                });

                // Gate untuk memeriksa apakah pengguna adalah pekerja
                Gate::define('lsppenerbit', function ($user) {
                    return $user->statusadmin->statusadmin === 'lsppenerbit'; // Cek apakah statusnya pekerja
                });

                // Gate untuk memeriksa apakah pengguna adalah pekerja
                Gate::define('operator', function ($user) {
                    return $user->statusadmin->statusadmin === 'operator'; // Cek apakah statusnya pekerja
                });

                // Gate untuk memeriksa apakah pengguna adalah pekerja
                Gate::define('dinas', function ($user) {
                    return $user->statusadmin->statusadmin === 'dinas'; // Cek apakah statusnya pekerja
                });
            }

}
