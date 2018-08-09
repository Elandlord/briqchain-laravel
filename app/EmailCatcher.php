<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailCatcher extends Model
{
    protected $fillable = [
        'ip_address',
        'date_last_pop_up',
        'is_active'
    ];
}
