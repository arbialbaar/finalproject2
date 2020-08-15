<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Home;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $homes = Home::all();
        return view('admin.home.index', compact('homes'));
    }

    public function create(){
        return view('admin.home.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'brand' => 'required',
            'brand_desc' => 'required',
            'visi' => 'required',
            'misi' => 'required'
        ]);
        Home::create($validateData);
        // $homes->save();
        // $request->session()->flash('pesan',"Data berhasil disimpan");
        // return redirect()->route('karyawan.index')->withSuccess("Data {$validateData['nama']} Berhasil Disimpan");
        return redirect('/admin')->with('pesan', "Data Berhasil Ditambahkan");
    }

    public function edit($id){
        $homes = Home::where('id', $id)->first();
        return view('admin.home.edit', compact('homes'));
    }

    public function update(Request $request, Home $home)
    {
        $dataId = $home->find($home->id);
        $data = $request->all();
        // $validateData = $request->validate([
        //     'brand' => 'required',
        //     'brand_desc' => 'required',
        //     'visi' => 'required',
        //     'misi' => 'required'
        // ]);
        $home->update($data);
        session()->flash('edit', "Data Berhasil Diupdate");
        // $homes->save();
        return redirect()->route('admin.home.index',['home' => $home->id])->with('pesan',"Update Data Berhasil");
    }

    public function delete(Home $home){
        $home->delete();
        return redirect('/admin')->with('pesan', "Data berhasil Dihapus");
    }
}
