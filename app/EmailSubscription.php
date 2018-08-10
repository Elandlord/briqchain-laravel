<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailSubscription extends Model
{
    protected $fillable = [
        'name',
        'email_address',
        'ip_address',
        'opt_in',
        'opt_in_type',
        'terminology'
    ];
}
