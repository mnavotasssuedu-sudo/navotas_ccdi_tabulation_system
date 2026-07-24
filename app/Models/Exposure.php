<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exposure extends Model
{
   protected $fillable = [
    'exposure_name',
    'order',
    'is_final',
]; //
}
