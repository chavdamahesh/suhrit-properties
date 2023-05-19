@extends('layouts.master')

@section('title', 'Home 2')

@section('content')

<?php //print_r($translations);exit;?>
{{-- <div style="background: rgb(137,184,233);
  background: linear-gradient(180deg, rgba(52,183,255) 75%, rgba(52,183,255) 100%);">
    <div class="row">
      <div class="container featured">
        @include("pages.templates.featured")
      </div>
    </div>
</div> --}}
<div class="row">
  <div class="col-12 col-sm-6 col-md-6">
     @include("pages.templates.featured2")  
  </div>
  <div class="col-12 col-sm-6 col-md-6">
    <div class="google-maps">
        <div class="gmap-search">
            <input type="text" placeholder="Type a Locality or Landmark"/> <a href="#"><i class="fa fa-search"></i></a>
        </div>
        <div id="map-canvas"></div>
    </div>
  </div>
</div>

  <div class="intro">
    <div class="row">
            <div class="col-md-6">
              <img class="img-responsive" src="/hsm-assets/img/city_bg.jpg" style="transform: translate(-286px,0); max-width: 149%; margin-bottom:-67px; height:600px;" />
            </div>
            <div class="col-md-6">
              <h1>
                  {{ $translations['HSM Property is the Real Estate Agency you’ve been looking for'] }}
              </h1>
            </div>
            <div class="col-md-6 media-body" style="display:flex; justify-content:center">
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
              </div>
            </div>
    </div>
  </div>
@endsection

