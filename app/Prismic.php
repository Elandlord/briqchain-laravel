<?php

namespace App;

use Prismic\Api;
use Prismic\LinkResolver;
use Prismic\Predicates;
use Prismic\Document;
use App\Enums\AcceptedLanguages;
use Illuminate\Support\Facades\Session;


class Prismic
{
    public $api;
    public $page;
    private $name;

    /**
     * Prismic constructor.
     * @param $type
     */
    public function __construct($type)
    {
        $this->api = API::get(env('PRISMIC_URL'));

        $this->name = $type;
        $this->page = $this->api->getSingle($type);
        $this->page = $this->getAlternateLanguages();
    }


    /**
     * NAMED CONSTRUCTORS
     */

    /**
     * @return \Prismic\Prismic
     */
    public static function siteWide()
    {
        return (new Static('site_breed'))->page;
    }

    /**
     * @return \Prismic\Prismic
     */
    public function getAlternateLanguages()
    {
        foreach (($altLangs = $this->page->getAlternateLanguages()) as $altLang) {
            if (Session::get('applocale') == $altLang->getLang()) {
                return $this->api->getByID($altLang->getId());
            }
        }

        return $this->page;
    }

    /**
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        if (!property_exists(__CLASS__, $property)) {
            return $this->getComponent("$this->name." . $property);
        }

        return $this->$property;
    }

    /**
     * @param $property
     * @param $arguments
     * @return mixed
     */
    public function __call($property, $arguments)
    {
        if (method_exists($this->page, $property)) {
            return $this->page->$property(...$arguments);
        }

        return $this->page->getGroup("$this->name." . $property)->getArray();
    }

    /**
     * @param $componentName
     * @return mixed
     */
    private function getComponent($componentName)
    {
        $component = $this->page->getImage($componentName);

        if (!empty($component)) {
            return $component;
        }

        $component = $this->page->getNumber($componentName);

        if (!empty($component)) {
            return $component->getValue();
        }

        $component = $this->page->getStructuredText($componentName);

        if (!empty($component)) {
            return $component->asText();
        }

        $component = $this->page->getText($componentName);

        if (!empty($component)) {
            return $component;
        }
    }

}