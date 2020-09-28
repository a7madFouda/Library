<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\book;
use App\category;
class AdminDashboard extends Controller
{
    public function getdata(){
        $members = User::all();
        $books = book::all();
        $categories = category::all();
        return view("admin/AdminDashboard", ['members'=>$members,'books'=>$books,'categories'=>$categories]);
     }
}
