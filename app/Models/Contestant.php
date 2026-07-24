<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    protected $fillable = [
         'contest_id',
        'contestant_no',
        'first_name',
        'last_name',
        'course',
        'gender',
        'photo',
    ];
}