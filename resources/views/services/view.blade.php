@extends('layouts.master')

@push('css')
<style>
    .icon-box{width: 100%; max-height: unset;}
    .our-features{margin-top: 0px; margin-bottom: 40px;}
    .our-features .media-body{width: 100%;}
    .content-title{position: unset; margin-top: unset; margin-bottom: unset;}
</style>
@endpush

@section('content')
<!-- // Google Map -->
<div class="container-fluid">
<div class="row">
<?php $i = 0; ?>
<?php foreach($blocks as $block_key => $block):
    $i++; ?>
    <?php if($block->block_key === 's_title'){ ?>
        <div style="background: rgb(137,184,233);background: linear-gradient(180deg, rgba(52,183,255) 75%, rgba(52,183,255) 100%); margin-bottom: 60px;">
            <div class="container page-title" id="{{ $block->block_key }}">
                <div class="row">
                    <h1 style="margin-top:20px; margin-bottom:20px;text-align: center; padding:20px; color: white;"><?php echo $block->getAttribute('title:'.$sitelocale);?></h1>
                </div>
            </div>
        </div>
    <?php  } else { ?>
        <div class="col-md-4">
            <div class="our-features" id="{{ $block->block_key }}">
                <div class="icon-box">
                    <div class="content-title">
                        <h2><?php echo $block->getAttribute('summary:'.$sitelocale); ?></h2><span class="before"></span>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <?php echo $block->getAttribute('content:'.$sitelocale); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <?php } endforeach; ?>
</div>
</div>
@endsection
