<div class="featured">
	<div class="featured-control">
		<a href="javascript:void(0);" class="featured-prev"><i class="fa fa-angle-left"></i></a>
		<a href="javascript:void(0);" class="featured-next"><i class="fa fa-angle-right"></i></a>
	</div>
	<div class="sar-owl-carousel">
		<div class="sar-owl-carousel-wrapper">
			<div id="featured" class="owl-carousel">
				@if(!empty($featured->toArray()))
					@foreach($featured as $feature)
						@if(!empty($feature->media))
							@php $pImage = '/resize?p='.$feature->media[0]->name.'&width=371&height=250'; @endphp
						@else
							@php $pImage = '/resize?p=placeimg_768_410_arch.jpg&width=371&height=250'; @endphp
						@endif

						<div class="thumbnail" data-propertyId="{{ $feature->id }}" data-lat="{{ $feature->lat }}" data-lng="{{ $feature->lng }}">
							<a href="/property/{{ $feature->id }}">
								<img src="{{ $pImage }}" class="img-responsive" alt=""/>	
								<div class="caption">
									<strong>@money($feature->price, 'INR', true)</strong>
									<ul class="list-inline">
										<li>{!! $feature->getAttribute('key_feature_1:'.$sitelocale) !!}</li>
										<li>{!! $feature->getAttribute('key_feature_2:'.$sitelocale) !!}</li>
										<li>{!! $feature->getAttribute('key_feature_3:'.$sitelocale) !!}</li>
									</ul>
								</div>
							</a>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>