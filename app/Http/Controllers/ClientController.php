<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        return view('admin.client.index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = $request->all();
        $client['image_client'] = $request->file('image_client')->store(
            'assets/client', 'public'
        );

        Client::create($client);
        // return view(['admin.client.index', 'user.client']);
        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, Client $client)
    {
        $dataId = $client->find($client->id);
        $data = $request->all();
        if($request->image_client){
            Storage::delete('public/'. $dataId->image_client);
            $data['image_client'] = $request->file('image_client')->store('assets/image_client', 'public');
        }
        $client->update($data);
        session()->flash('edit', "Data Berhasil Diupdate");
        return redirect()->route('client.index')->with('message', 'Update Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        Storage::delete('public/'. $client->image_client);
        $client->delete();
        return redirect()->route('client.index')->with('message', 'Data Berhasil Dihapus');
    }
}
