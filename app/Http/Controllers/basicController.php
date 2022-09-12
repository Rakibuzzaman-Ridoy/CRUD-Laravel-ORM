<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basicController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function main()
    {
        return view('main');
    }

    
}
