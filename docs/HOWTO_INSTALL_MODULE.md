# HOWTO: Install Module (ZIP)

1. Upload the module zip file via Module Manager.
2. Extract to `modules/` directory.
3. Ensure `module.json` exists and points to a valid ServiceProvider.
4. Run `php artisan migrate --path=modules/YourModule/src/Database/migrations`
5. Set the module `active` in `module.json` to `true` or use the ModuleManager to activate.
