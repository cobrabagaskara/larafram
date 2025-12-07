<?php

namespace Modules\Billing\Filament\Resources;

use Filament\Resources\Resource;
use Modules\Billing\Models\Dummy; // sesuaikan model

class DummyResource extends Resource
{
    protected static ?string $model = Dummy::class;
    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationGroup = 'Billing';
    protected static ?string $navigationLabel = 'Dummy';
    protected static ?int $navigationSort = 1;


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDummies::route('/'),
            'create' => Pages\CreateDummy::route('/create'),
            'edit' => Pages\EditDummy::route('/{record}/edit'),
        ];
    }
}
