<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
   public function arti(){
    $titre = 'une autre maniere de faire echo';
    return view("articles", compact('titre'));
   }
}
