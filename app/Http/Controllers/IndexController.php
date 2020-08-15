<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Contact;
use App\Client;
use App\Product;
use App\Gallery;
use App\footer;


class IndexController extends Controller
{
    public function home(){
        $footer = footer::all();
        $home = Home::all();
        return view('user.home',compact('home','footer'));
    }


    public function product(){
        $footer = footer::all();
        $gallery = Gallery::all();
        $product = Product::all();
        return view('user.product', compact('product','gallery','footer'));
    }

    public function gallery(){
        $footer = footer::all();
        $gallery = Gallery::all();
        return view('user.gallery', compact('gallery','footer'));
    }

    public function client(){
        $footer = footer::all();
        $client = Client::all();
        return view('user.client', compact('client','footer'));
    }

    public function contact(){
        $footer = footer::all();
        $contact = Contact::all();
        return view('user.contact', compact('contact','footer'));
    }
}
