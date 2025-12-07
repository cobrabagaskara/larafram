# MODULES.md

This document explains how modules should be structured and how to develop them.

## Minimal module structure

modules/YourModule/
  module.json
  src/
    Models/
    Providers/
    Http/Routes/
    Database/migrations/
    Filament/Resources/

module.json sample:
{
  "name": "Patient",
  "alias": "patient",
  "version": "1.0.0",
  "description": "Patient module",
  "providers": [
    "Modules\\Patient\\Providers\\PatientServiceProvider"
  ],
  "active": false
}

## Development tips
- Keep module logic inside `Modules\YourModule` namespace.
- Provide migrations inside the module and use `loadMigrationsFrom` in the service provider.
- Use Filament Resources inside `src/Filament/Resources` for admin UI.
