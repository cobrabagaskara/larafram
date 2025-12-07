<?php

namespace Modules\Billing\Filament\Resources\DummyResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Modules\Billing\Filament\Resources\DummyResource;

class ListDummies extends ListRecords
{
    protected static string $resource = DummyResource::class;
}
