@extends('layouts.master')

@section('content')

<?php //print_r($translations);exit;?>
<div style="background: rgb(137,184,233);
  background: linear-gradient(180deg, rgba(52,183,255) 75%, rgba(52,183,255) 100%);">
    <div class="row">
      <div class="featured-carousel">
        @include("pages.templates.featured")
      </div>
    </div>
</div>

<div class="google-maps">
    <div class="gmap-search">
        <input type="text" placeholder="Type a Locality or Landmark"/> <a href="#"><i class="fa fa-search"></i></a>
    </div>
    <div id="map-canvas"></div>
</div>

<div style="background: rgb(137,184,233);
  background: linear-gradient(180deg, rgba(52,183,255) 75%, rgba(52,183,255) 100%);">
  <div class="container page-title" id="">
    <div class="row">
      <h1>
        {{ $translations['HSM Property is the Real Estate Agency you’ve been looking for'] }}
      </h1>
    </div>
  </div>
</div>
<div class="container intro">
  <div class="row">
    <div class="col-12 col-md-6">
       <img class="img-responsive" src="/hsm-assets/img/city_bg.jpg" style="transform: translate(-286px,0); max-width: 149%; margin-bottom:-67px; height:498px;" />
    </div>
    <div class="col-12 media-body" style="display:flex; justify-content:center">
              <div class="t-center" style="margin: 5px; text-align: center; width: 250px; border: 1px solid #f3f3f3;     margin-bottom: 42px">
                <div class="p-header">{{ $translations['rent'] }}</div><div class="detail number"><a href="/rent">{{ $rent_count }}</a></div>
              </div>
              <div class="t-center" style="margin: 5px;margin-bottom: 43px;text-align: center; width: 250px; border: 1px solid #f3f3f3;">
                <div class="p-header">{{ $translations['sale'] }}</div><div class="detail number"><a href="/sale">{{ $sale_count }}</a></div>
              </div>
          </div>
 <div class="col-12 col-md-6">
        <div class="row">
          <div class="col-12">
              <div class="content-title t-center">
              <?php foreach ($blocks as $block_key => $block):
                if($block->block_key === 'home'){
                   echo $block->getAttribute('content:'.$sitelocale);
                }?>
              <?php endforeach;?>
              </div>
          </div>
         {{--  <div class="col-12 media-body" style="display:flex; justify-content:center">
              <div class="t-center" style="margin: 5px; text-align: center; width: 250px; border: 1px solid #f3f3f3;">
                <div class="p-header">{{ $translations['rent'] }}</div><div class="detail number"><a href="/rent">{{ $rent_count }}</a></div>
              </div>
              <div class="t-center" style="margin: 5px; text-align: center; width: 250px; border: 1px solid #f3f3f3;">
                <div class="p-header">{{ $translations['sale'] }}</div><div class="detail number"><a href="/sale">{{ $sale_count }}</a></div>
              </div>
          </div> --}}
{{-- <div class="container intro">
    <div class="row">
      <div class="col-12 col-md-6">
        <img class="img-responsive" src="/hsm-assets/img/home-page.png" />
      </div> --}}
      
      {{-- <div class="col-12 col-md-6">
        <div class="row">
          <div class="col-12">
              <div class="content-title t-center">
                  <h2 class="media-heading">{{ $translations['we-listen'] }}</h2>
              </div>
          </div>
          <div class="col-12">
              <div class="content-title t-center">
                  <h2 class="media-heading">{{ $translations['we-understand'] }}</h2>
              </div>
          </div>
          <div class="col-12">
              <div class="content-title t-center">
                  <h2 class="media-heading">{{ $translations['we-deliver'] }}</h2>
              </div>
          </div> --}}

          {{-- <div class="col-12 media-body" style="display:flex; justify-content:center">
              <div class="t-center" style="margin: 5px; text-align: center; width: 250px; border: 1px solid #f3f3f3;">
                <div class="p-header">{{ $translations['rent'] }}</div><div class="detail number"><a href="/rent">{{ $rent_count }}</a></div>
              </div>
              <div class="t-center" style="margin: 5px; text-align: center; width: 250px; border: 1px solid #f3f3f3;">
                <div class="p-header">{{ $translations['sale'] }}</div><div class="detail number"><a href="/sale">{{ $sale_count }}</a></div>
              </div>
          </div> --}}
      </div></div>
    </div>

</div>

@endsection
