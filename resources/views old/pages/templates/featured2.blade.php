
    <div class="row" id="scroll">
        <?php foreach($featured as $feature): ?>
            <div class="col-md-4">
                <?php if(isset($feature->images[0]['image'])){?>
                    <?php $pImage = '/resize?p=' . $feature->media[0]['name'].'&width=371&height=250';?>
            
                <?php  } else {

                        $pImage = '/resize?p=placeimg_768_410_arch.jpg&width=371&height=250'; 

                    } ?>
      
                    <div class="thumbnail" data-propertyId="<?php echo  $feature->id; ?>" data-lat="<?php echo  $feature->lat; ?>" data-lng="<?php echo  $feature->lng; ?>">
                        <a href="/property/<?php echo  $feature->id; ?>">
                            <img src="<?php echo $pImage ?>" class="img-responsive" alt=""/>
                            
                        <div class="caption">
                            <strong>₹ <?php echo number_format($feature->price,0);?></strong>
                        </div>
                        </a>
                    </div> 
            </div>
        <?php 
            endforeach;
        ?>     
       
    </div>

