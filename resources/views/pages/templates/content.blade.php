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
                <span class="media-icon animate-me pull-left">
                    <i class="fa fa-desktop"></i>
                </span>

                <div class="media-body">                    
                    <?php 
                        echo $block->getAttribute('content:'.$sitelocale);
                    ?>
                </div>
            </div>
        </div>
       
    </div>    
</div>