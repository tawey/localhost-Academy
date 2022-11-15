<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeinsController extends Controller
{
    public function inscription()
    {
        
        return view('inscription');
    }
};
