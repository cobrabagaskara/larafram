<?php

namespace Modules\Patient\Filament\Resources;

use Filament\Resources\Resource;

class PatientResource extends Resource
{
    protected static ?string $model = \Modules\Patient\Models\Patient::class;
}
