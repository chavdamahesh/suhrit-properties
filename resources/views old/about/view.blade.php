@extends('layouts.master')

@section('content')
<!-- // Google Map -->
  <?php foreach($blocks as $block_key => $block):?>
    <?php if($block->block_key === 'a_title'){ ?>
      <div style="background: rgb(137,184,233);background: linear-gradient(180deg, rgba(52,183,255) 75%, rgba(52,183,255) 100%);">
        <div class="container page-title" id="{{ $block->block_key }}">
          <div class="row">
            <h1 style="margin-top:20px; margin-bottom:20px; text-align: center; padding:20px; color: white;">
                <?php echo $block->getAttribute('title:'.$sitelocale); ?>
              </h1>
          </div>
        </div>
      </div>
    <?php  } else { ?>
    <div class="container our-features" id="{{ $block->block_key }}">
        <div class="row">
            <div class="col-sm-12">
                <div class="content-title">
                    <h2>
                        <?php echo $block->getAttribute('title:'.$sitelocale); ?>
                        </h2><span class="before"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="media">
                    <!--<span class="media-icon animate-me pull-left">
                        <i class="fa fa-desktop"></i>
                    </span>-->
                      {{-- <img class="img-responsive" style="margin-bottom:20px;" src="/hsm-assets/img/office.jpg" /> --}}
                      <img class="img-responsive" style="margin-bottom:20px;" src="/hsm-assets/img/city_bg.jpg" />

                    <div class="media-body">
                        <?php
                            echo $block->getAttribute('content:'.$sitelocale);
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
  <?php } endforeach;?>
@endsection
