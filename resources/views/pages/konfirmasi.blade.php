@extends('layouts.layout')
@section('title', 'Kaos Muslim RG')
@section('description', 'Kaos Muslim')
@section('content')
<div class="top">
    <div class="container">
        <div class="col-12 col-md-6 mx-auto">
            <h4>Konfirmasi Pesanan</h4>
            <hr>
            <form method="post" action="{{ action('ProductController@whatsapp') }}" class="my-4">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Anda" name="nama-pelanggan">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="3" name="alamat"></textarea>
                </div>
                <div class="form-group">
                    <label>Pilihan Baju</label>
                    <input type="text" class="form-control" value={{ $nama }} name="nama-produk">
                </div>
                <div class="row">
                    
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Ukuran</label>
                            <input type="text" class="form-control" name="ukuran" value="{{ $ukuran }}">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlah">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class=" col-md-8 col-12 mx-auto">
                        <button class="btn btn-lg btn-block whatsapp-button semi-bold" type="submit" name="submitbutton" value="whatsapp"><i class="fab fa-whatsapp fa-1x"></i>&nbsp;Pesan via Whatsapp</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection