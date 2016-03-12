<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'start_date', 'end_date', 'url', 'enable', 'working', 'description', 'sort_order'
    ];

    protected $casts = [
        'working' => 'boolean',
        'enable' => 'boolean',
    ];


}
