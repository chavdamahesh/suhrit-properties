@extends('layouts.master')
@section('content')
<div style="background: rgb(137,184,233);background: linear-gradient(180deg, rgba(137,184,233,1) 75%, rgba(111,150,190,1) 100%);">
  <?php foreach($blocks as $block_key => $block):?>
    <?php if($block->block_key === 'p_title'){ ?>
      <div style="background: rgb(137,184,233);background: linear-gradient(180deg,rgba(52,183,255) 75%, rgba(52,183,255) 100%);">
        <div class="container page-title" id="{{ $block->block_key }}">
          <div class="row">
            <h1 style="margin-top:20px; margin-bottom:20px; padding:20px; color: white;">
                <?php echo $block->getAttribute('title:'.$sitelocale); ?>
            </h1>
          </div>
        </div>
      </div>
    <?php } ?>
  <?php endforeach; ?>
</div>
<div class="container projects" ng-controller="PropertyListCtrl">
{{-- 
    <div class="search-filters" style="display:flex; justify-content:start;"> --}}
    <div id="sidebar" class="col-md-3 left_sidebar">
        
            <div class="">
            <label class="bb nmb">{{ $translations['type'] }}:</label>
        <fieldset class="bg-grey s-box" style="margin-bottom:20px;">
                <ul id="filtrable" class="filtrable nav nav-pills inline" data-filter-group="contract">
                    <!--<li class="all current office"><a href="#" data-filter="*"><?php //echo __('All')?></a></li>
                    <li class="sale"><a href="#" data-filter=".sale"><?php //echo __('Sale')?></a></li>
                    <li class="rent"><a href="#" data-filter=".rent"><?php //echo __('Rent')?></a></li>
                    -->
                    
                    <li>
                       <?php
                           $locTypes = array(
                               //'All' => __('All'),
                               'House' => __('House'),
                               'Apartment' => __('Apartment'),
                               'Commercial' => __('Commercial'),
                           );
                       ?>
                  {{--      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> --}}
                      {{--  <input class="filters-select" id="Type"> --}}
                           <?php foreach($locTypes as $key => $val):?>
                           <br/>
                            <div class="form-group">
                               <input class="filters-checkbox" id="Type" name="type[]" type="checkbox" value="<?php echo $key;?>">
                                   <?php echo $val;?>
                            </div>
                           <?php endforeach;?>
                     {{--    </select> --}}
                    </li>
                </ul>
            </div>
        </fieldset>
    <div class="">
        <label class="bb nmb">{{ $translations['location'] }}:</label>
        <fieldset class="bg-grey s-box" style="margin-bottom:20px;">
            <ul id="filtrable" class="filtrable nav nav-pills inline">
                 <li>
                    {{-- <select class="filters-select" id="Location"> --}}
                        {{-- <option value="*">{{ $translations['location'] }}</option> --}}

                        <?php
                          $loc = [];
                          foreach($locations as $key => $option):
                            if(in_array($option, $loc)) continue;
                            $loc[] = $option;

                          ?>
                          <br/>
                            {{-- <option value="<?php echo preg_replace('/\s+/', '-', $option);?>"> --}}
                            <div class="form-group">
                              <input class="filters-checkbox" type="checkbox" name="location[]" id="Location" value="<?php echo preg_replace('/\s+/', '-', $option);?>">
                                <?php echo $option;?>
                            </div>
                            {{-- </option> --}}
                        <?php endforeach;?>
                    {{-- </select> --}}
                 </li>
             </ul>
        </fieldset>
     </div>
    <div class="" data-filter-group="price">
        <label class="bb nmb">{{ $translations['price'] }}:</label>
        <fieldset class="bg-grey s-box" style="margin-bottom:20px;">
            <ul id="filtrable" class="filtrable nav nav-pills s-right" data-filter-group="price">
                <li>

                    {{-- <select class="filters-select" id="BudgetRent"> --}}
                        <?php foreach($types as $key => $val): ?>
                        <br/>
                        <div class="form-group">
                          <input class="filters-checkbox" type="checkbox" id="BudgetRent" value="<?php echo $key;?>"> 
                          <?php echo $val;?>
                        </div>
                        <?php endforeach; ?>
                    {{-- </select> --}}
                </li>
            </ul>
        </fieldset>
    </div>
{{-- 
    <div class="inline">
        <ul id="filtrable" class="filtrable nav nav-pills inline">
             <li>
                <button class="btn btn-primary" id="clear" style="padding: 5px 9px; margin-top: 20px;">X</button>
             </li>
        </ul>
    </div> --}}
    </div>
  {{--   <div class="clear"></div> --}}
    <div class="content_block col-md-9 f_right">
        <section class="row">
            <?php   

                foreach($properties as $property) {
                    $cls = '';

                    if($property->price <= 1000){
                        $cls = 'r1000';
                    }else if($property->price > 1000 && $property->price <= 2000){
                        $cls = 'r1000-2000';
                    }else if($property->price > 2000 && $property->price <= 10000){
                        $cls = 'r2000';
                    }else if($property->price <= 300000){
                        $cls = 's300';
                    }else if($property->price > 300000 && $property->price <= 500000){
                        $cls = 's300-500';
                    }else if($property->price > 500000 && $property->price <= 800000){
                        $cls = 's500-800';
                    }else{
                        $cls = 's800';
                    }

                    $location = isset($property->location->name) ? $property->location->name : '';
                ?>
                <article class="item col-sm-6 col-md-4 <?php echo $cls.' '.$property->contract.' '.'location'.preg_replace('/\s+/', '-', $location).' '.$property->type ?>">
                    <?php if($property->featured): ?><div class="ribbon-container"><h4>&#9733; Featured</h4></div><?php endif; ?>
                 {{--    <?php if($property->sold): ?><div class="ribbon ribbon-top-right"><span>Sold</span></div><?php endif; ?> --}}
                    <div class="thumbnail">
                        <?php
                        if(isset($property->media[0]['file_name'])){
                            $pImage = '/resize?p=' . $property->media[0]['file_name'].'&width=371&height=250';
                            //('public/storage/avatars/'.);
                        } else {
                            $pImage = '/resize?p=placeimg_768_410_arch.jpg&width=371&height=250';
                        }
                        ?>
                        <a href="/property/<?php echo  $property->id; ?>">
                            <img src="<?php echo $pImage;?>" class="img-responsive" alt="">
                        </a>
                        <div class="caption">

                            <p class="price" style="font-size: 90%;">
                              <span style="text-transform: capitalize"><?= $property->type ?>/₹<?php echo number_format($property->price,0);?>
                            </p>
                            <ul class="fa-ul">
                                 <li>
                                    <?php echo $property
                                    ->getAttribute('key_feature_1:'.$sitelocale) ?>
                                 </li>
                                 <li>
                                    <?php echo $property
                                    ->getAttribute('key_feature_2:'.$sitelocale) ?>
                                 </li>
                                 <li>
                                    <?php echo $property
                                    ->getAttribute('key_feature_3:'.$sitelocale) ?>
                                 </li>
                            </ul>
                        </div>
                    </div>
                </article>
            <?php }?>
        </section>
    </div>
</div>
@endsection
