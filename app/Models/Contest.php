<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    protected $fillable = [
        'contest_name',
        'contest_type',
        'number_of_judges',
        'number_of_contestants',
        'tabulator_name',
        'logo',
        'pageant_logo',
        'status',
    ];
}