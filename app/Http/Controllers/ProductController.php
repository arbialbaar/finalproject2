<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductRequest;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function create(){
        return view('admin.product.create');
    }

    public function store(ProductRequest $request)
    {
        $product = $request->all();
        // $product['image_product'] = $request->file('image_product')->store(
        //     'assets/product', 'public'
        // );

        Product::create($product);
        // return view(['admin.product.index', 'user.product']);
        return redirect()->route('admin.product.index');
    }

    public function edit(Product $product){
        return view('admin.product.edit', compact('product'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $dataId = $product->find($product->id);
        $data = $request->all();
        // if($request->image_product){
        //     Storage::delete('public/'. $dataId->image_product);
        //     $data['image_product'] = $request->file('image_product')->store('assets/image_product', 'public');
        // }
        $product->update($data);
        session()->flash('edit', "Data Berhasil Diupdate");
        return redirect()->route('admin.product.index')->with('message', 'Update Data Berhasil');
    }

    public function destroy(Product $product)
    {
        Storage::delete('public/'. $product->image_product);
        $product->delete();
        return redirect()->route('admin.product.index')->with('message', 'Data Berhasil Dihapus');
    }
}
