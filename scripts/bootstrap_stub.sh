#!/bin/bash
echo "This is a helper script with steps to initialize the skeleton inside a real Laravel project."
echo "1. Move files into a Laravel project root (copy or merge)."
echo "2. Run: composer install"
echo "3. Register App\Providers\ModuleServiceProvider in config/app.php providers array."
echo "4. Run: php artisan module:make Patient (optional) or place modules into modules/ folder."
echo "5. Run migrations for module: php artisan migrate --path=modules/Patient/src/Database/migrations"
