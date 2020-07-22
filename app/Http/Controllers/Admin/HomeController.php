<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Home;

class HomeController extends Controller
{
    public function index(){
        $home = Home::all();
        return view('admin.home.index',compact('home'));
    }
    
    public function create(){
        return view('admin.home.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'brand' => '',
            'brand_desc' => '',
            'visi' => '',
            'misi' => ''
        ]);
        $home = Home::create($validateData);
        $home->save();
        $request->session()->flash('pesan',"Data berhasil disimpan");
        // return redirect()->route('karyawan.index')->withSuccess("Data {$validateData['nama']} Berhasil Disimpan");
        return redirect()->route('admin.home.index');
    }

    public function edit(Home $home){
        return view('admin.home.edit', compact('home'));
    }

    public function update(Request $request, Home $home)
    {
        $validateData = $request->validate([
            'brand' => '',
            'brand_desc' => '',
            'visi' => '',
            'misi' => ''
        ]);
        $home->update($validateData);
        $home->save();
        return redirect()->route('home.index',['home' => $home->id])->with('pesan',"Update Data Berhasil");
    }

}
