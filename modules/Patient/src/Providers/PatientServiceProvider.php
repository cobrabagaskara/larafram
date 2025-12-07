<?php

namespace Modules\Patient\Providers;

use Illuminate\Support\ServiceProvider;

class PatientServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $module = base_path('modules/Patient/src');

        if (file_exists($module . '/Http/Routes/web.php')) {
            $this->loadRoutesFrom($module . '/Http/Routes/web.php');
        }

        if (is_dir($module . '/Database/migrations')) {
            $this->loadMigrationsFrom($module . '/Database/migrations');
        }
    }
}
