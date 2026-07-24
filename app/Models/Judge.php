<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Judge extends Model
{
 protected $fillable = [
    'contest_id',
    'judge_name',
    'position',
    'email',
];
}