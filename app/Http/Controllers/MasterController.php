<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function indexAbout()
    {
        return view('about');
    }

    public function indexContact()
    {
        return view('contact');
    }

    public function indexPrivatePolicy()
    {
        return view('private_policy');
    }

    public function indexTermsOfUse()
    {
        return view('terms_of_use');
    }
}
