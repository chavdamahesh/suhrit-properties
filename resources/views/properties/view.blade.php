@extends('layouts.master')

@section('content')
<!-- // Google Map -->
{{-- <div class="google-maps small-map" style="width: 100%;">
	<div id="map-canvas"></div>
</div> --}}

<div class="container projects single-project">
	<div class="content-title">
		<h1><?php echo $property->getAttribute('name:'.$sitelocale); ?></h1>
	</div>

	<div class="clear"></div>

	<div class="project-slider">
		<?php $price = floatval($property->price); ?>
		<div class="project-type">For Contract: <?php echo __('For').' '.$property->contract; ?>: @money($price, 'INR', true)</div>
		<div class="col-12 col-md-6">
			<div class="royalSlider rsUni">
				<?php foreach($property->media as $img): ?>
				<img class="rsImg" src="<?php echo !empty($img['name'])? '/resize?p='.$img['name'].'&width=1024&height=800' : 'http://placehold.it/1024x800';?>" data-rsTmb="<?php echo !empty($img['name'])? '/resize?p='.$img['name'].'&width=1024&height=800' : 'http://placehold.it/1024x800';?>" alt="" />
				<?php endforeach; ?>
			</div>
			<div class="container intro">
				<div class="row">
					<div class="col-sm-12">
						<div class="media">
							<span class="media-icon animate-me pull-left">
								<i class="fa fa-map-marker"></i>
							</span>
							<div class="media-body">
								<h3><?php echo isset($property->address) ? $property->address : '' ?></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="rsNavi" style="right:-170px">
				<div class="rsThumbsArrow rsThumbsArrowLeft rsCus"><div class="rsThumbsArrowIcn"></div></div>
				<div class="rsThumbsArrow rsThumbsArrowRight rsCus"><div class="rsThumbsArrowIcn"></div></div>
			</div>
		</div>
	</div>
	<article>
		<div class="container intro">
			<div class="row">
				<div class="col-md-6">
					<div class="media">
						<div class="media-body">
							<h4 class="media-heading">
								 <i class="fa fa-home"></i>
							{{ $translations['Property details'] }}</h4>

							<ul>
								<?php if($property->total_area_int != ""){?>
									<?php echo $property->total_area_int != "0" ? '<li><div class="p-header">'. $translations['AREA INTERIOR'].'</div><div class="detail number"> '.$property->total_area_int.' <sup>sqft</sup></div></li> '  : ''?>
								<?php }?>
								<?php if($property->total_area_ext != ""){?>
								  <?php echo $property->total_area_ext != "0" ? '<li><div class="p-header">'. $translations['AREA EXTERIOR'].'</div><div class="detail number"> '.$property->total_area_ext.' <sup>sqft</sup></div></li> '  : '' ?>
								<?php }?>
								<?php if($property->floor != ""){?>
								  <?php echo $property->floor != "0" ? '<li><div class="p-header">'. $translations['FLOOR'].'</div><div class="detail number"> '.$property->floor.'</div></li> '  : '' ?>
								<?php }?>
								<?php if($property->orientation != ""){?>
								  <?php echo $property->orientation != "" ? '<li><div class="p-header">'. $translations['Orientation'].'</div><div class="detail number"> '.$property->orientation.'</div></li> ' : '' ?>
								<?php }?>
								<?php if($property->charges != ""){?>
								  <?php echo $property->charges != "" ? '<li><div class="p-header">'. $translations['Charges'].'</div><div class="detail number"> '.$property->charges.'</div></li> ' : '' ?>
								<?php }?>
								<?php if($property->energy_efficiency != ""){?>
								  <?php echo $property->energy_efficiency != "" ? '<li><div class="p-header">'. $translations['Energy Efficiency'].'</div><div class="detail number"> '.$property->energy_efficiency.'</div></li> ' : '' ?>
								<?php }?>
								<?php if($property->terrase != ""){?>
								  <?php echo $property->terrase != "0" ? '<li><div class="p-header">'. $translations['Terrase'].'</div> <div class="detail number"> Yes </div></li>' : '' ?>
								<?php }?>
								<?php if($property->garden != ""){?>
									<?php echo $property->garden != "0" ? '<li><div class="p-header">'. $translations['Garden'] .'</div><div class="detail number"> Yes </div></li> ' : '' ?>
								<?php }?>
								<?php if($property->garden_terrace_orientation != ""){?>
								  <?php echo $property->garden_terrace_orientation != "" ? '<li><div class="p-header">'. $translations['Garden / Terrace Orientation'].'</div><div class="detail number"> '.$property->garden_terrace_orientation.'</div></li> ' : '' ?>
								<?php }?>
								<?php if($property->no_bedrooms!=""){?>
									<?php echo $property->no_bedrooms != "0" ? '<li><div class="p-header">'. $translations['No. Bedrooms'].'</div><div class="detail number"> '.$property->no_bedrooms.'</div></li> '  : '' ?>
								<?php }?>
								<?php if($property->no_bath!=""){?>
									<?php echo $property->no_bath != "0" ? '<li><div class="p-header">'. $translations['No. Bathrooms'] . '</div><div class="detail number"> '.$property->no_bath.'</div></li> '  : '' ?>
								<?php }?>
								<?php if($property->parking != ""){?>
									<?php echo $property->parking != "0" ? '<li><div class="p-header">'. $translations['Parking'] . '</div><div class="detail number"> Yes </div></li> ' : '' ?>
								<?php }?>
								<?php if($property->garage != ""){?>
									<?php echo $property->garage != "0" ? '<li><div class="p-header">'. $translations['garage'] .'</div><div class="detail number"> Yes </div></li> ' : '' ?>
								<?php }?>
								<?php if($property->garage_no != ""){?>
									<?php echo $property->garage_no != "0" ? '<li><div class="p-header">'. $translations['No Garages'].'</div><div class="detail number"> '.$property->garage_no.'</div></li> '  : '' ?>
								<?php }?>
								<?php if($property->garage_area != ""){?>
									<?php echo $property->garage_area != "0" ? '<li><div class="p-header">'. $translations['Area of Garage'].'</div><div class="detail number"> '.$property->garage_area.'</div></li> '  : '' ?>
								<?php }?>
								<?php if($property->kitchen_type != ""){?>
								  <?php echo $property->kitchen_type != "" ? '<li><div class="p-header">'. $translations['Kitchen type'].'</div><div class="detail number"> '.$property->kitchen_type.'</div></li> '  : '' ?>
								<?php }?>
								<?php if($property->lift != ""){?>
								  <?php echo $property->lift != "0" ? '<li><div class="p-header">'. $translations['Has lift'].'</div><div class="detail number"> Yes </div></li>'  : '' ?>
								<?php }?>
								<?php if($property->security_door != ""){?>
								  <?php echo $property->security_door != "0" ? '<li><div class="p-header">'. $translations['Security door'].'</div> <div class="detail number"> Yes </div></li>' : '' ?>
								<?php }?>
								<?php if($property->double_glazing != ""){?>
								  <?php echo $property->double_glazing != "0" ? '<li><div class="p-header">'. $translations['Double glazing'].'</div> <div class="detail number"> Yes </div></li>' : '' ?>
								<?php }?>
								<?php if($property->year_built != ""){?>
								  <?php echo $property->year_built != "0" ? '<li><div class="p-header">'.$translations['Year Built'].'</div><div class="detail number"> '.$property->year_built.'</div></li> '  : '' ?>
								<?php }?>
								<?php if($property->year_reno != ""){?>
								  <?php echo $property->year_reno != "0" ? '<li><div class="p-header">'. $translations['Year Renovated'].'</div><div class="detail number"> '.$property->year_reno.'</div></li> '  : '' ?>
								<?php }?>
							</ul>
						</div>
					</div>
					<div class="quote-button">
						<a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal"><?php echo $translations['get-price'] ?></a>
					</div>
				</div>		
			</div>
			{{-- <div class="container intro">
				<div class="row">
					<div class="col-sm-6">
						<div class="quote-button" style="margin-left:357px;margin-top:-35px;text-align: center;">
							<a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal"><?php echo $translations['get-price'] ?></a>
						</div>
					</div>
				</div>
			</div> --}}
		</div>

		<div class="google-maps small-map">
			<div id="map-canvas"></div>
		</div>

		<div class="content-title sub-title">
			<h4>{{ $translations['Property Description'] }}</h4><span class="before"></span>
		</div>

		<br/>

		<div class="row">
			<div class="col-sm-12">
				<p><?php echo $property->getAttribute('short_desc:'.$sitelocale); ?></p>
			</div>
		</div>

		<div class="content-title get-price-title">
			<h4>{{ $translations['get-price'] }}</h4><span class="before"></span>
		</div>

		<form name="get-quote" method="post" action="/property/<?php echo  $property->id; ?>" class="af-form row" id="af-form-gq">
			<input type="hidden" name="pid" value="<?php echo $property->id; ?>" />
			@csrf
			<div class="col-sm-12 af-outer af-required">
				<div class="form-group af-inner">
					<input type="text" name="name" id="name-gq" size="30" value="" placeholder="{{$translations['name']}}" class="form-control placeholder" />
					@if ($errors->has('name'))
						<span class="text-danger">{{ $errors->first('name') }}</span>
					@endif
				</div>
			</div>

			<div class="col-sm-12 af-outer af-required">
				<div class="form-group af-inner">
					<input type="text" name="email" id="email-gq" size="30" value="" placeholder="{{$translations['email']}} *" class="form-control placeholder" />
					@if ($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
			</div>

			<div class="col-sm-12 af-outer af-required">
				<div class="form-group af-inner">
					<input type="text" name="phone" id="phone-gq" size="30" value="" placeholder="{{$translations['phone']}} *" class="form-control placeholder" />
					@if ($errors->has('phone'))
						<span class="text-danger">{{ $errors->first('phone') }}</span>
					@endif
				</div>
			</div>

			<div class="col-sm-12 af-outer af-required">
				<div class="form-group af-inner">
					<textarea name="message" id="input-message-gq" cols="30" rows="10" placeholder="Message *" class="form-control placeholder"></textarea>
					@if ($errors->has('message'))
						<span class="text-danger">{{ $errors->first('message') }}</span>
					@endif
				</div>
			</div>
			<button type="submit" class="btn btn-success" id="submit_btn">{{$translations['Send Message']}}!</button>
		</form>
	</article>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel"><?php echo $translations['get-price'] ?></h4>
			</div>
			<div class="modal-body">

				<form name="get-quote" method="post" action="" class="af-form row" id="af-form-gq">
					@csrf
					<input type="hidden" name="subject" value="Enquiry for <?php echo $property->name; ?>" />
					<input type="hidden" name="property_id" value="<?php echo $property->id; ?>" />

					<div class="col-sm-12 af-outer af-required">
						<div class="form-group af-inner">
							<input type="text" name="name" id="name-gq" size="30" value="" placeholder="{{$translations['name']}}" class="form-control placeholder" />
							<label class="error" for="name-gq" id="name_error_gq">Name is required.</label>
						</div>
					</div>

					<div class="col-sm-12 af-outer af-required">
						<div class="form-group af-inner">
							<input type="text" name="email" id="email-gq" size="30" value="" placeholder="{{$translations['email']}} *" class="form-control placeholder" />
							<label class="error" for="email-gq" id="email_error_gq">Email is required.</label>
						</div>
					</div>

					<div class="col-sm-12 af-outer af-required">
						<div class="form-group af-inner">
							<input type="text" name="phone" id="phone-gq" size="30" value="" placeholder="{{$translations['phone']}} *" class="form-control placeholder" />
							<label class="error" for="phone-gq" id="phone_error_gq">Phone is required.</label>
						</div>
					</div>

					<div class="col-sm-12 af-outer af-required" style="display:none">
						<div class="form-group af-inner">
							<textarea name="content" id="input-messages-gq" cols="30" rows="10" placeholder="Message *" class="form-control placeholder"></textarea>
							<label class="error" for="input-message-gq" id="message_error_gq">Message is required.</label>
						</div>
					</div>

					<div class="col-sm-12 af-outer af-required">
						<div class="form-group af-inner">
							<textarea name="content" id="input-message-gq" cols="30" rows="10" placeholder="Message *" class="form-control placeholder"></textarea>
							<label class="error" for="input-message-gq" id="message_error_gq">Message is required.</label>
						</div>
					</div>
				</form>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" name="submit" class="btn btn-success" id="submit_btn_gq">{{$translations['Send Message']}}!</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
@endsection
