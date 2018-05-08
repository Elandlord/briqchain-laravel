<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App;

class LanguageController extends Controller
{
    public function changeLanguage($language)
    {
        session(['applocale' => $language]);
        Session::save();
        return redirect()->back();
    }
}
