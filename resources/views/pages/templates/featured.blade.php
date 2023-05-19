    <div class="featured">
        <div class="featured-control">
            <a href="#" class="featured-prev"><i class="fa fa-angle-left"></i></a>
            <a href="#" class="featured-next"><i class="fa fa-angle-right"></i></a>
        </div>
        <div class="sar-owl-carousel">
            <div class="sar-owl-carousel-wrapper">
                <div id="featured" class="owl-carousel">
                    <?php foreach($featured as $feature): ?>
                        <?php if(count($feature->media)){ ?>
                            <?php $pImage = '/resize?p=' . $feature->media[0]['file_name'].'&width=371&height=250';?>
         
                        <?php  } else {
                                $pImage = '/resize?p=placeimg_768_410_arch.jpg&width=371&height=250'; 

                            } ?>
                  
                 
                    <div class="thumbnail" data-propertyId="<?php echo  $feature->id; ?>" data-lat="<?php echo  $feature->lat; ?>" data-lng="<?php echo  $feature->lng; ?>">
                        <a href="/property/<?php echo  $feature->id; ?>">
                            <img src="<?php echo $pImage ?>" class="img-responsive" alt=""/>
                            
                        <div class="caption">
                            <strong>@money($feature->price, 'INR', true)</strong>
                            <ul class="list-inline">
                             <li>
                                <?php echo $feature
                                ->getAttribute('key_feature_1:'.$sitelocale) ?>
                             </li>
                             <li>
                                <?php echo $feature
                                ->getAttribute('key_feature_2:'.$sitelocale) ?>
                             </li>
                             <li>
                                <?php echo $feature
                                ->getAttribute('key_feature_3:'.$sitelocale) ?>
                             </li>
                            </ul>
                        </div>
                        </a>
                    </div> 
                    <?php 
                        endforeach;
                    ?>          
                </div>
            </div>
        </div>
    </div>