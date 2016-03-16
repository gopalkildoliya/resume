<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = [
        'name', 'start_date', 'end_date', 'url', 'enable', 'unlimited', 'authority', 'license_number', 'sort_order'
    ];

    protected $casts = [
        'unlimited' => 'boolean',
        'enable' => 'boolean',
    ];
}
