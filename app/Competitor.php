<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competitor extends Model
{
    protected $fillable = [
        'name', 'level', 'complete_challenges', 'experience',
    ];
}
