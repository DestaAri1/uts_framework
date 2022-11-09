<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\User;

class CategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kategori = categories::all();
        return view('main.kategori', compact('kategori'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $kategori = new categories();
        $cek_kategori = categories::where('nama_kategori', $request->nama_kategori);
        if (!$cek_kategori) {
            return back()->with('error', 'Kategori Sudah Ada');
        } else {
            $kategori->nama_kategori = $request->nama_kategori;
            $kategori->id_user = auth()->user()->id;
            $kategori->save();
            return redirect()->back()->with('success', 'Kategori Berhasil Ditambahkan');
        }
    }

    public function show($id)
    {
        //
    }

    public function destroy($id)
    {
        $kategori = categories::findOrFail($id);
        if ($kategori->delete()) {
            return back()->with('success', 'Data Berhasil Dihapus');
        } else {
            return back()->with('error', 'Data Gagal Dihapus');
        }
    }
}
