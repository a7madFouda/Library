<?php

namespace App\Http\Controllers;
use App\book;

use Illuminate\Http\Request;

class HomePage extends Controller
{
    public function home(){

        $books = Book::all();
        return view("/homepage",["books"=>$books]);}
}

