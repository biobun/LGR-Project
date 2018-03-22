<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    public function produk()
    {
        $produk = Product::all();
        return view('admin.produk')->with('produk', $produk);
    }
    public function insertProduk(Request $request)
    {
        Product::create($request->all());
        return back()->with('message','Data berhasil disimpan');
    }
    public function updateProduk(Request $request)
    {
        $updateProduk = Product::findOrFail($request->id);
        $updateProduk->update($request->all());

        return back()->with('message','Data berhasil diubah');
    }
    public function deleteProduk(Request $request){
        $deleteProduk = Product::findOrFail($request->id);
        $deleteProduk->delete();

        return back()->with('message','Data berhasil dihapus');

    }
}
