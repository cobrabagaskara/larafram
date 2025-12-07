<?php

namespace Modules\Pharmacy\Providers;

use Illuminate\Support\ServiceProvider;

class PharmacyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $module = base_path('modules/Pharmacy/src');

        if (file_exists($module . '/Http/Routes/web.php')) {
            $this->loadRoutesFrom($module . '/Http/Routes/web.php');
        }

        if (is_dir($module . '/Database/migrations')) {
            $this->loadMigrationsFrom($module . '/Database/migrations');
        }
    }
}
