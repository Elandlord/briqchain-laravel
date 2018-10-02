<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaArticle extends Model
{

    public static function convert($mediaArticles)
    {

        return collect($mediaArticles)->map(function($mediaArticle) {
            return [
                'logo' => $mediaArticle->getImage('logo')->asText(),
                'name' => $mediaArticle->getText('name'),
                'website' => $mediaArticle->getLink('website')->asText(),
            ];
        });

    }
}
