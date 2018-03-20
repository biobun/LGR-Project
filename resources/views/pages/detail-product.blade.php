@extends('layouts.layout')
@section('title', 'Kaos Muslim RG')
@section('description', 'Kaos Muslim')
@section('pagespecificstyles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/lightslider.js') }}"></script>   
@stop
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-8">                
            <ul id="lightSlider">
                <li data-thumb="{{ asset('images/'.$product->img1) }}">
                    <img src="{{ asset('images/'.$product->img1) }}" class="img-fluid">
                </li>
                <li data-thumb="{{ asset('images/'.$product->img2) }}">
                    <img src="{{ asset('images/'.$product->img2) }}" class="img-fluid">
                </li>
                <li data-thumb="{{ asset('images/'.$product->img3) }}">
                    <img src="{{ asset('images/'.$product->img3) }}" class="img-fluid">
                </li>
                <li data-thumb="{{ asset('images/'.$product->img4) }}">
                    <img src="{{ asset('images/'.$product->img4) }}" class="img-fluid">
                </li>
            </ul>
        </div>
        <div class="col-12 col-md-4 pt-4">
            <h4 class="text-center">{!! $product->nama !!}</h4>
            <h5 class="text-center" style="color: #BFBFBF">Rp. {!! number_format($product->harga )!!}</h5>
            <div class="row">
                <div class="col-6 col-md-6 pt-4">
                    <h5>Choose Size</h5>
                </div>
                <div class="col-6 col-md-6 text-right pt-4">
                    <a href="{{ url('/howtobuy') }}" class="navbar-blue"><p>Size Guide</p></a>
                </div>
            </div>
            <div class="row">
                <form class="col-12 col-md-12" method="post" action="{{ action('ProductController@pesan', $product->id) }}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input type="hidden" name="nama-produk" value="{{ $product->nama }}"/>
                    <div class="col-12 col-md-12">                    
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1" name="ukuran">
                                <option value="" selected disabled hidden>Pilih Ukuran</option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 mx-auto">
                        <button class="btn btn-lg btn-primary btn-block sharp red-button" type="submit">Pesan</button>
                    </div>
                </form>
                <div class="col-12 col-md-12 pt-4 ">
                    <h6>Description</h6>
                    <p>{!! $product->deskripsi !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$('#lightSlider').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    slideMargin: 1,
    thumbItem: 4
});
</script>
@endsection