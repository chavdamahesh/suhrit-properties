<div class="container projects" ng-controller="PropertyListCtrl">
    <div class="inline">
        <ul id="filtrable" class="filtrable nav nav-pills inline" data-filter-group="contract">
            <li class="all current office"><a href="#" data-filter="*"><?php echo __('All')?></a></li>
            <li class="sale"><a href="#" data-filter=".sale"><?php echo __('Sale')?></a></li>
            <li class="rent"><a href="#" data-filter=".rent"><?php echo __('Rent')?></a></li>
            <li>
        </ul>
    </div>
    <div class="inline" data-filter-group="price">
        <ul id="filtrable" class="filtrable nav nav-pills s-right" data-filter-group="price">
            <li>
                <?php
                $types = array(
                    '*' => __('All'),
                    '.p1000' => '0 - 1000',
                    '.p1000-2000' => '1000 - 2000',
                    '.p2000' => '2000+',
                );?>
                <select class="filters-select" id="BudgetRent">
                    <?php foreach($types as $key => $val):?>
                    <option value="<?php echo $key;?>"><?php echo $val;?></option>
                    <?php endforeach; ?>
                </select>
            </li>
            <li>
                <?php
                $types_sale = array(
                        '*' => __('All'),
                        '.p300' => '0 - 30000',
                        '.p300-500' => '300 - 50000',
                        '.p500-800' => '500 - 80000',
                        '.p800' => '80000+',
                    );
                ?>
                <select class="filters-select" id="BudgetSale">
                    <?php foreach($types_sale as $key => $val):?>
                    <option value="<?php echo $key;?>"><?php echo $val;?></option>
                    <?php endforeach; ?>
                </select>
            </li>
        </ul>
    </div>
    <div class="inline">
        <ul id="filtrable" class="filtrable nav nav-pills inline s-right">
             <li>
                <select class="filters-select" id="Location">
                    <option value="*"><?php echo __('Location'); ?></option>
                    <?php foreach($locations as $key => $option):?>
                        <option value="<?php echo $option['id'];?>">
                            <?php echo $option['name'];?>
                        </option>
                    <?php endforeach;?>
                </select>
             </li>
             <li>
                <?php
                    $locTypes = array(
                        '*' => __('All'),
                        'House' => __('House'),
                        'Apartment' => __('Apartment'),
                        'Commercial' => __('Commercial'),
                    );
                ?>
                <select class="filters-select" id="Type">
                    <?php foreach($locTypes as $key => $val):?>
                        <option value="<?php echo $key;?>">
                            <?php echo $val;?>
                        </option>
                    <?php endforeach;?>
                </select>
             </li>
         </ul>
     </div>
    <div class="inline">
        <ul id="filtrable" class="filtrable nav nav-pills inline">
             <li>
                <button class="btn btn-primary" id="clear">Clear</button>
             </li>
        </ul>
    </div>
    <div class="clear"></div>
    <section class="row items">
        <?php
            foreach($allProperties as $property) {
                $cls = '';
                if($property->contract=='rent'){
                    if($property->price <= 1000){
                        $cls = 'p1000';
                    }else if($property->price > 1000 && $property->price <= 2000){
                        $cls = 'p1000-2000';
                    }else{
                        $cls = 'p2000';
                    }
                }else if($property->contract == 'sale'){
                    if($property->price <= 300000){
                        $cls = 'p300';
                    }else if($property->price > 300000 && $property->price <= 500000){
                        $cls = 'p300-500';
                    }else if($property->price > 500000 && $property->price <= 800000){
                        $cls = 'p500-800';
                    }else{
                        $cls = 'p800';
                    }
                }
            ?>
            <article class="item col-sm-6 col-md-4 <?php echo $cls.' '.$property->contract.' '.'location'.$property->location_id.' '.$property->type ?>">
                <div class="thumbnail">
                    <?php
                    if(isset($property->media[0]['name'])){
                        $pImage = '/resize?p=' . $property->media[0]['name'].'&width=371&height=250';
                        //('public/storage/avatars/'.);
                    } else {
                        $pImage = '/resize?p=placeimg_768_410_arch.jpg&width=371&height=250';
                    }
                    ?>
                    <a href="/p/<?php echo  $property->id; ?>">
                        <img src="<?php echo $pImage;?>" class="img-responsive" alt="">
                    </a>
                    <div class="caption">
                        <p class="price">€ <?php echo number_format($property->price,2);?></p>
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
