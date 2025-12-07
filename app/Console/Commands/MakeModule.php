<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MakeModule extends Command
{
    protected $signature = 'module:make {name}';
    protected $description = 'Create a new module scaffold inside /modules';

    public function handle()
    {
        $name = Str::studly($this->argument('name'));
        $basePath = base_path("modules/{$name}");

        if (is_dir($basePath)) {
            $this->error("Module {$name} already exists!");
            return;
        }

        // Create folder structure
        mkdir("{$basePath}/Http/Controllers", 0777, true);
        mkdir("{$basePath}/Models", 0777, true);
        mkdir("{$basePath}/Database/Migrations", 0777, true);
        mkdir("{$basePath}/routes", 0777, true);

        // Create routes file
        file_put_contents("{$basePath}/routes/web.php", "<?php\n\nuse Illuminate\Support\Facades\Route;\n\nRoute::prefix('" . Str::kebab($name) . "')->group(function() {\n    Route::get('/', function() {\n        return 'Hello from {$name} module';\n    });\n});");

        $this->info("Module {$name} created successfully.");
    }
}
