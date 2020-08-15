<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $home = Home::all();
        return view('admin.home.index',compact('home'));
    }

}
