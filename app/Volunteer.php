<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = [
        'organization', 'start_date', 'end_date', 'role', 'enable', 'cause', 'once', 'description', 'sort_order'
    ];

    protected $casts = [
        'once' => 'boolean',
        'enable' => 'boolean',
    ];
}
