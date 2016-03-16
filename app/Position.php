<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
        'company', 'start_date', 'end_date', 'title', 'enable', 'location', 'working', 'description', 'sort_order'
    ];

    protected $casts = [
        'working' => 'boolean',
        'enable' => 'boolean',
    ];
}
