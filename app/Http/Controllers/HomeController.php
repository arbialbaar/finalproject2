<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;

class HomeController extends Controller
{
    public function home(){
        $home = Home::all();
        return view('user.home',compact('home'));
    }

    public function product(){
        return view('user.product');
    }

    public function client(){
        return view('user.client');
    }

    public function contact(){
        return view('user.contact');
    }
}