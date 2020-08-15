<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Contact;
use App\Client;
use App\Product;
use App\Gallery;

class IndexController extends Controller
{
    public function home(){
        $home = Home::all();
        return view('user.home',compact('home'));
    }

    public function product(){
        $gallery = Gallery::all();
        $product = Product::all();
        return view('user.product', compact('product','gallery'));
    }

    public function gallery(){
        $gallery = Gallery::all();
        return view('user.gallery', compact('gallery'));
    }

    public function client(){
        $client = Client::all();
        return view('user.client', compact('client'));
    }

    public function contact(){
        $contact = Contact::all();
        return view('user.contact', compact('contact'));
    }
}
