<?php

namespace App\Http\Controllers;

use App\footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::all();
        return view('admin.footer.index', compact('footer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.footer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(['address' => 'required']);
        Footer::create($validateData);
        return redirect('/footer')->with('pesan', "Data Berhasil Ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $footer = Footer::where('id', $id)->first();
        return view('admin.footer.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, footer $footer)
    {
        $dataId = $footer->find($footer->id);
        $data = $request->all();
        $footer->update($data);
        session()->flash('edit', "Data Berhasil Diupdate");
        return redirect()->route('footer.index',['footer' => $footer->id])->with('pesan',"Update Data Berhasil");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(footer $footer)
    {
        $footer->delete();
        return redirect('/footer')->with('pesan', "Data berhasil Dihapus");
    }
}
