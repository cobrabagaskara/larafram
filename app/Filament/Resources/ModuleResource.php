<?php

namespace App\Filament\Resources;

use Filament\Resources\Resource;
use Filament\Resources\Pages\ListRecords;

class ModuleResource extends Resource
{
    protected static ?string $model = null; // Not backed by Eloquent, managed by ModuleRegistry

    public static function listPages(): array
    {
        return [
            'index' => ListRecords::route('/'),
        ];
    }
}
