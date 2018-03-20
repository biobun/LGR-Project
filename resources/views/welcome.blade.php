@extends('layouts.layout')
@section('title', 'Kaos Muslim RG')
@section('description', 'Kaos Muslim')
@section('pagespecificstyles')
	<link rel="stylesheet" href="{{ asset('css/style1.css') }}"> <!-- Resource style -->
    <script type="text/javascript" src="{{ URL::asset('js/modernizr.js') }}"></script><!-- Modernizr -->   
@stop
@section('content')
<div class="section-banner" style="background: url({{ asset('images/banner.jpg')  }})">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12">
				<div class="banner-context">
					<section class="cd-intro">
						<h1 class="cd-headline slide white-text">
						<span>KECE DALAM</span>
						<span class="cd-words-wrapper">
							<b class="is-visible">BERHIJRAH</b>
							<b>BERDAKWAH</b>
						</span>
						</h1>
					</section> <!-- cd-intro -->
					<div class="col-md-4">
						<button class="btn btn-lg btn-primary red-button my-4">Belanja Sekarang</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="my-4 col-12 text-center">
			<h5>Every product is hand-design by the person who made it. Shop with confidence. Shop with impact</h5>
			<hr class="redline">
		</div>
		<div class="col-md-6 col-12 my-3 text-center">
			<div class="card">
				<img class="card-img-top img-fluid" src="{{ asset('images/card.jpg') }}" alt="Card image">
				<div class="card-img-overlay my-auto" style="align-items: center; display: flex">
					<div class="col-12">
						<h2 class="card-title white-text">COMFORT STYLE</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 my-3 col-12 text-center">
			<div class="card">
				<img class="card-img-top img-fluid" src="{{ asset('images/card.jpg') }}" alt="Card image">
				<div class="card-img-overlay my-auto" style="align-items: center; display: flex">
					<div class="col-12">
						<h2 class="card-title white-text">PALESTINE STYLE</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="js/main.js"></script> <!-- Resource jQuery -->
@endsection