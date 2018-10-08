<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    public static function convert($platforms)
    {
        return collect($platforms)->map(function($platform) {
            return [
                'name' => $platform->getText('name'),
                'subtitle' => $platform->getText('subtitle'),
                'guidelines_title' => $platform->getText('guidelines_title'),
                'guidelines' => $platform->getStructuredText('guidelines'),
                'rewards_title' => $platform->getText('rewards_title'),
                'available_points' => $platform->getNumber('available_points'),
                'rewards_description' => $platform->getText('rewards_description'),
                'how_to_earn_points' => $platform->getText('how_to_earn_points'),
                'material_icon_1' => $platform->getText('material_icon_1'),
                'instruction_1' => $platform->getText('instruction_1'),
                'material_icon_2' => $platform->getText('material_icon_2'),
                'instruction_2' => $platform->getText('instruction_2'),
                'material_icon_3' => $platform->getText('material_icon_3'),
                'instruction_3' => $platform->getText('instruction_3'),
                'icon' => $platform->getImage('icon'),
            ];
        });

    }
}
