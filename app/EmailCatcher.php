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

    public static function disable()
    {
        $emailCatcher = Static::where('ip_address', \Request::ip())->first();

        $emailCatcher->is_subscribed = true;
        $emailCatcher->save();


    }
}
