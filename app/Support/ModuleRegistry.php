<?php

namespace App\Support;

use Illuminate\Support\Facades\File;

class ModuleRegistry
{
    protected static array $modules = [];

    public static function scan(): void
    {
        $base = base_path('modules');
        if (!File::isDirectory($base)) {
            return;
        }

        $folders = File::directories($base);

        foreach ($folders as $folder) {
            $manifestPath = $folder . '/module.json';

            if (!File::exists($manifestPath)) {
                continue;
            }

            $manifest = json_decode(File::get($manifestPath), true);

            if (!isset($manifest['alias'])) {
                $manifest['alias'] = strtolower(basename($folder));
            }

            self::$modules[$manifest['alias']] = [
                'path' => $folder,
                'manifest' => $manifest,
                'active' => $manifest['active'] ?? false,
            ];
        }
    }

    public static function activeModules(): array
    {
        return array_filter(self::$modules, fn($m) => $m['active'] === true);
    }

    public static function all(): array
    {
        return self::$modules;
    }

    public static function get(string $alias)
    {
        return self::$modules[$alias] ?? null;
    }
}
