@extends('layouts.master')
@section('content')
{{-- <?php print_r($errors);exit; ?> --}}
<div style="background: rgb(137,184,233);background: linear-gradient(180deg, rgba(137,184,233,1) 75%, rgba(111,150,190,1) 100%);">
  <?php foreach($blocks as $block_key => $block):?>
    <?php if($block->block_key === 'register_title'){ ?>
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
</div><br/>
    <div class="container">
        <form method="POST" action="/property-details-store" enctype="multipart/form-data"> 
             
          {{--   @csrf --}}
       {{--    <input type="hidden" value="{{$data->id}}" name="id"> --}}{{-- store inserted in value  --}}
            <div class="form-row">
                <div class="col-md-12">
                    <div class="right">
                        <ul id="filtrable" class="filtrable nav nav-pills inline" data-filter-group="contract">
                            <li>
                              <label>{{ $translations['for'] }}</label>
                               <?php
                                   $locTypes = array(
                                       'Sale' => __('Sale'),
                                       'Rent' => __('Rent'),
                                   );
                               ?>
                               <select class="filters-select" id="For" name="contract" value="{{old('contract')}}">
                                   <?php foreach($locTypes as $key => $val):?>
                                       <option value="<?php echo $key;?>">
                                           <?php echo $key;?>
                                       </option>
                                   <?php endforeach;?>
                               </select>
                            </li>
                        </ul>
                        <ul id="filtrable" class="filtrable nav nav-pills inline" data-filter-group="contract">
                            <li>
                              <label>{{ $translations['type'] }}</label>
                               <?php
                                   $locTypes = array(
                                       'House' => __('House'),
                                       'Apartment' => __('Apartment'),
                                       'Commercial' => __('Commercial'),
                                   );
                               ?>
                               <select class="filters-select" id="Type" name="type" value="{{old('type')}}">
                                   <?php foreach($locTypes as $key => $val):?>
                                       <option value="<?php echo $key;?>">
                                           <?php echo $val;?>
                                       </option>
                                   <?php endforeach;?>
                               </select>
                            </li>
                        </ul>
                        <ul id="filtrable" class="filtrable nav nav-pills inline">
                            <li>
                               {{-- <label>Location</label>
                               <input type="text" class="form-control" name="location">
                                <select class="filters-select" id="Location">
                                    <?php foreach($locations as $key => $option):?>
                                        <option value="<?php echo $key;?>">
                                            <?php echo $option;?>
                                        </option>
                                    <?php endforeach;?>
                                </select> --}}
                            <div class="col-md-6">
                              <label>Location</label>
                              <br/>
                              <input type="text" class="form-control" name="place" value="{{old('place')}}">
                                @if ($errors->has('place'))
                                    <span class="text-danger">{{ $errors->first('place') }}</span>
                                @endif
                            </div>
                            </li>
                         </ul> 
                    </div>  
                </div>
            </div> 
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Property Name</label>
                  <input type="text" class="form-control" name="property_name" value="{{old('property_name')}}">
                    @if ($errors->has('property_name'))
                        <span class="text-danger">{{ $errors->first('property_name') }}</span>
                    @endif
                </div>
            </div> 
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Short Description</label>
                  <input type="text" class="form-control" name="short_desc" value="{{old('short_desc')}}">
                    @if ($errors->has('short_desc'))
                        <span class="text-danger">{{ $errors->first('short_desc') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                  <label>Price</label>
                  <input type="text" class="form-control" name="price" value="{{old('price')}}">
                   @if ($errors->has('price'))
                        <span class="text-danger">{{ $errors->first('price') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-3">
                  <label>Floor</label>
                  <input type="text" class="form-control" name="floor" value="{{old('floor')}}">
                    @if ($errors->has('floor'))
                        <span class="text-danger">{{ $errors->first('floor') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-3">
                  <label>Interior Area</label>
                  <input type="text" class="form-control" name="total_area_int" value="{{old('total_area_int')}}">
                    @if ($errors->has('total_area_int'))
                        <span class="text-danger">{{ $errors->first('total_area_int') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-3">
                  <label>Exterior Area</label>
                  <input type="text" class="form-control" name="total_area_ext" value="{{old('total_area_ext')}}">
                    @if ($errors->has('total_area_ext'))
                        <span class="text-danger">{{ $errors->first('total_area_ext') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                  <label>Year Built</label>
                  <input type="text" class="form-control" name="year_built" value="{{old('year_built')}}">
                    @if ($errors->has('year_built'))
                        <span class="text-danger">{{ $errors->first('year_built') }}</span>
                    @endif
                </div>
                  <div class="form-group col-md-3">
                  <label>No. Garages</label>
                  <input type="text" class="form-control" name="garage_no" value="{{old('garage_no')}}">
                    @if ($errors->has('garage_no'))
                        <span class="text-danger">{{ $errors->first('garage_no') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-3">
                  <label>No. Bathrooms</label>
                  <input type="text" class="form-control" name="no_bath" value="{{old('no_bath')}}">
                    @if ($errors->has('no_bath'))
                        <span class="text-danger">{{ $errors->first('no_bath') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-3">
                  <label>No.Bedrooms</label>
                  <input type="text" class="form-control" name="no_bedrooms" value="{{old('no_bedrooms')}}">
                    @if ($errors->has('no_bedrooms'))
                        <span class="text-danger">{{ $errors->first('no_bedrooms') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                  <label>Orientation</label>
                  <input type="text" class="form-control" name="orientation" value="{{old('orientation')}}">
                    @if ($errors->has('orientation'))
                        <span class="text-danger">{{ $errors->first('orientation') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-3">
                  <label>Garden/Terrace Orientation</label>
                  <input type="text" class="form-control" name="garden_terrace_orientation" value="{{old('garden_terrace_orientation')}}">
                    @if ($errors->has('garden_terrace_orientation'))
                        <span class="text-danger">{{ $errors->first('garden_terrace_orientation') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-3">
                  <label>Charges</label>
                  <input type="text" class="form-control" name="charges" value="{{old('charges')}}">
                    @if ($errors->has('charges'))
                        <span class="text-danger">{{ $errors->first('charges') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-3">
                  <label>Energy Efficiency</label>
                  <input type="text" class="form-control" name="energy_efficiency" value="{{old('energy_efficiency')}}">
                    @if ($errors->has('energy_efficiency'))
                        <span class="text-danger">{{ $errors->first('energy_efficiency') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                  <label>Year Renovated</label>
                  <input type="text" class="form-control" name="year_reno" value="{{old('year_reno')}}">
                    @if ($errors->has('year_reno'))
                        <span class="text-danger">{{ $errors->first('year_reno') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-3">
                  <label>No. of Outdoor parking spots</label>
                  <input type="text" class="form-control" name="no_outdoor_parking_spots" value="{{old('no_outdoor_parking_spots')}}">
                    @if ($errors->has('no_outdoor_parking_spots'))
                        <span class="text-danger">{{ $errors->first('no_outdoor_parking_spots') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-3">
                  <label>Kitchen Type</label>
                  <input type="text" class="form-control" name="kitchen_type" value="{{old('kitchen_type')}}">
                    @if ($errors->has('kitchen_type'))
                        <span class="text-danger">{{ $errors->first('kitchen_type') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <label>Options</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="lift" value="1" @if(old('lift')) checked @endif>
                   {{--    <input type="hidden" value="0" name="lift" > --}}
                      <label class="form-check-label">Lift</label>
                        &nbsp;&nbsp;&nbsp;
                      <input class="form-check-input" type="checkbox" name="security_door" value="1"  @if(old('security_door')) checked @endif>
                      <label class="form-check-label">Security Door</label>
                         &nbsp;&nbsp;&nbsp;
                      <input class="form-check-input" type="checkbox" name="double_glazing" value="1"  @if(old('double_glazing')) checked @endif>
                      <label class="form-check-label">Double Glazing</label>
                         &nbsp;&nbsp;&nbsp;
                      <input class="form-check-input" type="checkbox" name="garage" value="1"  @if(old('garage')) checked @endif>
                      <label class="form-check-label">Garage</label>
                         &nbsp;&nbsp;&nbsp;
                      <input class="form-check-input" type="checkbox" name="garden" value="1"  @if(old('garden')) checked @endif>
                      <label class="form-check-label">Garden</label>
                         &nbsp;&nbsp;&nbsp;
                      <input class="form-check-input" type="checkbox" name="parking" value="1"  @if(old('parking')) checked @endif>
                      <label class="form-check-label">Parking</label>
                         &nbsp;&nbsp;&nbsp;
                      <input class="form-check-input" type="checkbox" name="terrase" value="1"  @if(old('terrase')) checked @endif>
                      <label class="form-check-label">Terrase</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4">
                  <label>Key Feature 1</label>
                  <input type="text" class="form-control" name="key_feature_1" value="{{old('key_feature_1')}}">
                    @if ($errors->has('key_feature_1'))
                        <span class="text-danger">{{ $errors->first('key_feature_1') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4">
                  <label>Key Feature 2</label>
                  <input type="text" class="form-control" name="key_feature_2" value="{{old('key_feature_2')}}">
                    @if ($errors->has('key_feature_2'))
                        <span class="text-danger">{{ $errors->first('key_feature_2') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4">
                  <label>Key Feature 3</label>
                  <input type="text" class="form-control" name="key_feature_3" value="{{old('key_feature_3')}}">
                    @if ($errors->has('key_feature_3'))
                        <span class="text-danger">{{ $errors->first('key_feature_3') }}</span>
                    @endif
                </div>
            </div>
            <br/>
            <div class="form-row">
                <div class="col-md-12">
                      <label>Upload Image</label>
                      <input type="file" class="form-control" name="image_upload[]" multiple>
                    @if ($errors->has('image_upload.0'))
                        <span class="text-danger">{{ $errors->first('image_upload.0') }}</span>
                    @endif

                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <br/>
                     <button type="submit" id="btn1" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
