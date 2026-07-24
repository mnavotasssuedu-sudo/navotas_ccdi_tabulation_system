<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'judge_id',
        'contestant_id',
        'criteria_id',
        'score',
    ];


    public function judge()
    {
        return $this->belongsTo(Judge::class);
    }


    public function contestant()
    {
        return $this->belongsTo(Contestant::class);
    }


    public function criteria()
    {
        return $this->belongsTo(Criteria::class);
    }
}