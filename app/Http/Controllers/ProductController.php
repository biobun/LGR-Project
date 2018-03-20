<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Product;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function view(){
        $product = Product::all();
        return view('pages.shop')->with('product', $product);
    }
    public function detail($name_product){
        $product = Product::find($name_product);
        return view('pages.detail-product')->with('product', $product);
    }
    public function pesan(){
        $ukuran = input::get('ukuran');
        $nama_produk = input::get('nama-produk');
        return view('pages.konfirmasi')->withUkuran($ukuran)->withNama($nama_produk);
    }
    public function konfirmasi(){
        return view('pages.konfirmasi');
    }
    public function whatsapp(Request $request){
        $namapelanggan =  input::get('nama-pelanggan');
        $alamat=  input::get('alamat');
        $namaproduk =  input::get('nama-produk');
        $ukuran =  input::get('ukuran');
        $jumlah =  input::get('jumlah');
        switch ($request->submitbutton) {
            case 'whatsapp':
                return redirect('https://api.whatsapp.com/send?phone=6281282339293&text=PESAN#'.
                    $namapelanggan.'%23'.
                    $alamat.'%23'.
                    $namaproduk.'%23'.
                    $ukuran.'%23'.
                    $jumlah.'%23'
                );
                break;
            case 'sms':
                return redirect("sms:+6281282339293?body=Hello");
                break;
        }
    }
    public function sms(){
        echo "asldkasl;d";
    }
}
