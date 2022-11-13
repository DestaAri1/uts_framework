<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $list = wishlist::where('user_id', Auth::id())->latest()->paginate(5);
        return view('main.wishlist', compact('list'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $list = new wishlist();
        $cek_list = wishlist::where('judul', $request->judul)->first();
        if ($cek_list) {
            return back()->with('error', 'Buku Sudah ada');
        } else {
            $list->judul = $request->judul;
            $list->pengarang = $request->pengarang;
            $list->tgl = $request->tgl;
            $list->sinopsis = $request->sinopsis;
            $list->harga = $request->harga;
            $list->user_id = auth()->user()->id;
            $list->save();
            return redirect()->back()->with('success','Wishlist Berhasil Ditambahkan');
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $list = wishlist::findOrFail($id);
        return view('main.edit_wishlist', compact('list'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'pengarang' => 'required',
            'tgl' => 'required',
            'harga' => 'required',
            'sinopsis' => 'required'
        ]);

        $cari = wishlist::findOrFail($id);
        $cek_list = wishlist::where('judul', $request->judul)->first();

        if ($cek_list) {
            return back()->with('error', 'Wishlist sudah ada');
        } else {
            $input = [
                'judul' => $request->judul,
                'pengarang' => $request->pengarang,
                'tgl' => $request->tgl,
                'harga' => $request->harga,
                'sinopsis' => $request->sinopsis
            ];
            $cari->update($input);
            return redirect()->route('wishlist.index')->with('success', 'Wishlist Berhasil Diupdate');
        }

    }

    public function destroy($id)
    {
        $list = wishlist::findOrFail($id);
        if($list->delete()) {
            return back()->with('success', 'Wishlist Berhasil Dihapus');
        } else {
            return back()->with('error', 'Wishlist Gagal Dihapus');
        }
    }
}
