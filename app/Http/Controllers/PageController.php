<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $homes = Home::withTranslations()->get();
        $about = About::withTranslations()->first();
        

        return view('welcome', compact('homes', 'about'));
    }
}
