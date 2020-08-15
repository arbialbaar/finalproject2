<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\GalleryRequest;
use App\Gallery;
use App\Product;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('admin.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallery = Gallery::all();
        $products = Product::all();
        return view('admin.gallery.create', compact('products','gallery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Galleryrequest $request)
    {
        $gallery = $request->all();
        $gallery['gambar_product'] = $request->file('gambar_product')->store(
            'assets/gallery', 'public'
        );
        Gallery::create($gallery);
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        $dataId = $gallery->find($gallery->id);
        $data = $request->all();
        if($request->gambar_gallery){
            Storage::delete('public/'. $dataId->gambar_gallery);
            $data['gambar_gallery'] = $request->file('gambar_gallery')->store('assets/gallery', 'public');
        }
        $gallery->update($data);
        session()->flash('edit', "Data Berhasil Diupdate");
        return redirect()->route('gallery.index')->with('message', 'Update Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        Storage::delete('public/'. $gallery->image_gallery);
        $gallery->delete();
        return redirect()->route('gallery.index')->with('message', 'Data Berhasil Dihapus');
    }
}
