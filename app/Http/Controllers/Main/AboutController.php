<?php

namespace App\Http\Controllers\Main;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('main.about.index', compact('abouts'));
    }
}
