@extends('layouts.layout')
@section('title', 'Kaos Muslim RG')
@section('description', 'Kaos Muslim')
@section('content')
<div class="top">
    <div class="container">
    	<div class="row">
            <div class="col-md-12 text-center">
    		  <h1>Shirts</h1>
              <h5>All our shirts are comfort for the perfect fit and always in fashion with timeless and stylish details</h5>
            </div>
        </div>
        <div class="row pt-5 text-center">
        <?php
            $i =1;
            foreach ($product as $products) {
        ?>
            <div class="col-md-4 mt-4">
                <a href="{!! route('detailProduk', ['name_product' => $products->id ]) !!}">
                    <img src="{{ asset('images/'.$products->img1) }}" class="img-fluid">
                </a>
                <h4 class="semi-bold my-2">{!! $products->nama !!}</h4>
                <h5 style="color:#BFBFBF">{!! number_format($products->harga) !!}</h5>
            </div>
        <?php } ?>
        </div>
    </div>
</div>
@endsection