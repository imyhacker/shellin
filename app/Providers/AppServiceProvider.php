<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;

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
        Blade::directive('currency', function ($expression) {
            return "IDR : <?php echo number_format($expression, 0, ',', '.'); ?>";
        });
        Blade::directive('money', function ($amount) {
            return "<?php echo 'USD : $'. number_format($amount, 2); ?>";
        });
        Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
        });

        Gate::define('isUser', function($user) {
           return $user->role == 'user';
       });
    }
}
