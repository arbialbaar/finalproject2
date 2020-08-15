<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesan;

class PesanController extends Controller
{
    public function index()
    {
        $pesan = Pesan::all();
        return view('admin.pesan.index', compact('pesan'));
    }

    public function create()
    {
        return view('user.contact');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'pesan' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required'
        ]);
        Pesan::create($validateData);
        return redirect('/contact-us')->with('pesan', "Terima kasih atas pesan anda");
    }

    public function destroy(Pesan $pesan)
    {
        $pesan->delete();
        return redirect('/pesan')->with('pesan', "Data berhasil Dihapus");
    }
}
