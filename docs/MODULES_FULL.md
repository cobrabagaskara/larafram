# Developer Guide — Modules

## Create module via artisan command
Use provided command `php artisan module:make Name` (stub). In a real Laravel project, register the command in `app/Console/Kernel.php`.

## Module manifest (module.json) fields
- name
- alias
- version
- description
- providers (array)
- active (boolean)
- requires (optional) - dependency map

## Module lifecycle
Install -> Activate -> Use -> Deactivate -> Remove

## Filament Integration
Place Filament Resources under `src/Filament/Resources`. When the module is active and its ServiceProvider registered, resources will be discovered automatically by Filament (if PSR-4 autoloading is set up).
