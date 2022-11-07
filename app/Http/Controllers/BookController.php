<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\categories;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $buku = book::paginate(10);
        $kategori = categories::all();
        return view('main.buku', compact('buku','kategori'));
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $buku = new book();
        $kategori = categories::all();
        $cek_buku = book::where('judul', $request->judul)->first();
        if ($cek_buku) {
            return back()->with('error', 'Buku telah ada');
        } else {
            $buku->judul = $request->judul;
            $buku->penerbit = $request->penerbit;
            $buku->pengarang = $request->pengarang;
            $buku->year = $request->year;
            $buku->id_kategori = $request->kategori;
            $buku->save();
            return redirect()->back()->with('success','Data Berhasil Ditambahkan');
        }

    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $buku = book::findOrFail($id);
        $kategori = categories::all();
        return view('main.edit', compact('buku', 'kategori'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request ,[
            'judul' => 'required',
            'penerbit' => 'required',
            'pengarang' => 'required',
            'year' => 'required',
            'id_kategori' => 'required'
        ]);

        $cari = book::findOrFail($id);
        $cek_buku = book::where('judul', $request->judul)->first();
        if ($cek_buku) {
            return redirect()->route('buku.index')->with('error','Data Gagal di Ubah');
        } else {
            $input = [
                'judul' => $request->judul,
                'penerbit' => $request->penerbit,
                'pengarang' => $request->pengarang,
                'year' => $request->year,
                'id_kategori' => $request->id_kategori
            ];
            $cari->update($input);
            return redirect()->route('buku.index')->with('success', 'Data Berhasil di Ubah');
        }

    }
    public function destroy($id)
    {
        $buku = book::findOrFail($id);
        if($buku->delete()) {
            return back()->with('success', 'Data Berhasil Dihapus');
        } else {
            return back()->with('error', 'Data Gagal Dihapus');
        }
    }
}
