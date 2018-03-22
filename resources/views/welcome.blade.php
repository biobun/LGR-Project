@extends('layouts.layout')
@section('title', 'Kaos Muslim RG')
@section('description', 'Kaos Muslim')
@section('pagespecificstyles')
	<link rel="stylesheet" href="{{ asset('css/style1.css') }}"> <!-- Resource style -->
	<script type="text/javascript" src="{{ URL::asset('js/modernizr.js') }}"></script><!-- Modernizr -->
@stop
@section('content')
<div class="section-banner">
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
							<b>BERAMAL</b>
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
		<div class="row my-4">
			<div class="pt-4 col-12 col-md-3 vertical-line">
				<div class="row">
					<div class="col-4 text-center">		
						<i class="fas fa-map-marker-alt fa-lg"></i>
					</div>
					<div class="col-8">
						<p class="semi-bold">Free Delivery</p>
						<p>For order over $99</p>
					</div>
				</div>
			</div>
			<div class="pt-4 col-12 col-md-3 vertical-line">
				<div class="row">
					<div class="col-4 text-center">		
						<i class="fas fa-retweet fa-lg"></i>
					</div>
					<div class="col-8">
						<p class="semi-bold">90 Days Return</p>
						<p>No questions asked</p>
					</div>
				</div>
			</div>
			<div class="pt-4 col-12 col-md-3 vertical-line">
				<div class="row">
					<div class="col-4 text-center">		
						<i class="fas fa-lock fa-lg"></i>
					</div>
					<div class="col-8">
						<p class="semi-bold">Secure Payment</p>
						<p>100% safe payment</p>
					</div>
				</div>
			</div>
			<div class="pt-4 col-12 col-md-3">
				<div class="row">
					<div class="col-4 text-center">		
						<i class="fas fa-users fa-lg"></i>
					</div>
					<div class="col-8">
						<p class="semi-bold">24/7 Support</p>
						<p>Dedicated support</p>
					</div>
				</div>
			</div>
		</div>
			<hr>
		<div class="row">
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