<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    protected $fillable = [
        'name', 'phone', 'email', 'address', 'image'
    ];
}
