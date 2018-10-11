<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HousingPageController extends Controller
{
    public function properties()
    {
        $lightBlue = true;

        return view('housing.properties', compact(
            'lightBlue'
        ));
    }

    public function map()
    {
        $lightBlue = true;

        return view('housing.map', compact(
            'lightBlue'
        ));
    }

    public function buyOrRent()
    {
        $lightBlue = true;

        return view('housing.buy-or-rent', compact(
            'lightBlue'
        ));
    }

    public function signUp()
    {
        $lightBlue = true;

        return view('housing.sign-up', compact(
            'lightBlue'
        ));
    }

    public function sellProperty()
    {
        $lightBlue = true;

        return view('housing.sell-property', compact(
            'lightBlue'
        ));
    }
}
