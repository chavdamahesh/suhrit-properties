@extends('layouts.master')

@section('title', 'Home')

@section('content')

<div style="">
	<div class="row">
		<div class="featured-carousel">
			@include("pages.templates.featured")
		</div>
	</div>
</div>

<div class="google-maps">
	<div class="gmap-search">
		<input type="text" placeholder="Type a Locality or Landmark" />
		<a href="javascript:void(0);"><i class="fa fa-search"></i></a>
	</div>
	<div id="map-canvas"></div>
</div>

<div style="background: rgb(137,184,233);
	background: linear-gradient(180deg, rgba(52,183,255) 75%, rgba(52,183,255) 100%);">
	<div class="container page-title" id="">
		<div class="row">
			<h1>{{ $translations['HSM Property is the Real Estate Agency you’ve been looking for'] }}</h1>
		</div>
	</div>
</div>

<div class="intro">
	<div class="row">
		<div class="col-12 col-md-6">
			{{-- <div style="height: 471px; background-image: url('{{ asset('hsm-assets/img/city_bg.jpg') }}'); background-repeat: no-repeat; background-position: center; background-size: cover;"></div> --}}
			<img class="img-responsive" src="{{ asset('hsm-assets/img/city_bg.jpg') }}" style="width: 100%; height: 100%;" />
		</div>
		<div class="col-12 col-md-6">
			<div class="row" style="margin: 5px 0px;">
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<div class="p-header">{{ $translations['rent'] }}</div>
						</div>
						<div class="card-body">
							<div class="text-center">
								<a href="{{ route('rent.index') }}">{{ $rent_count }}</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<div class="p-header">{{ $translations['sale'] }}</div>
						</div>
						<div class="card-body">
							<div class="text-center">
								<a href="{{ route('sale.index') }}">{{ $sale_count }}</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12">
					<div class="t-center">
						@foreach($blocks as $block_key => $block)
							@if($block->block_key === 'home')
								{!! $block->getAttribute('content:'.$sitelocale) !!}
							@endif
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
