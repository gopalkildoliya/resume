<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name', 'proficiency', 'enable', 'sort_order'
    ];

    protected $casts = [
        'enable' => 'boolean',
    ];
}
