<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\footer;

class IncludeController extends Controller
{
    public function footer(){
        $footer = footer::all();
        return view('include.user.footer',compact('footer'));
    }
}
