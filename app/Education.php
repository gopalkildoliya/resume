<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'school', 'start_date', 'end_date', 'degree', 'field', 'grade', 'enable', 'studding', 'activities', 'description', 'sort_order'
    ];

    protected $casts = [
        'studding' => 'boolean',
        'enable' => 'boolean',
    ];
}
