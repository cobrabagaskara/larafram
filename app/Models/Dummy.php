<?php

namespace Modules\Billing\Models;

use Illuminate\Database\Eloquent\Model;

class Dummy extends Model
{
    protected $table = 'dummies';

    protected $fillable = [
        'name',
    ];
}
