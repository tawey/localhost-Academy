<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomedController extends Controller{
public function dashboard()
{
    return view('dashboard');
}
};

