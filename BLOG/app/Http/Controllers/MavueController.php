<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class MavueController extends Controller
{
    public function voir(){
        Return View ('salut');
    }
}
