<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailCatcher extends Model
{

    protected $dates = [
        'date_last_pop_up',
    ];

    protected $fillable = [
        'ip_address',
        'date_last_pop_up',
        'is_active'
    ];
}
