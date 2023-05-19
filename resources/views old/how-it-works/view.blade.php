@extends('layouts.master')

@section('title', 'How It Works')

@section('content')

<div style="background: rgb(137,184,233);background: linear-gradient(180deg, rgba(137,184,233,1) 75%, rgba(111,150,190,1) 100%);">
  <?php foreach($blocks as $block_key => $block):?>
    <?php if($block->block_key === 'how-it-works'){ ?>
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
    <div class="row">
        <div class="col-md-6">
        <?php foreach($blocks as $block_key => $block):?>
            <?php if($block->block_key === 'The-hard-working-helper-that-saves-you-time.'){?>
                    <h2 style="font-size: 52px;color: #34b7ff;font-weight: 600;"><?php echo $block->getAttribute('title:'.$sitelocale); ?></h2>
                    <p style="font-size: 20px;color: black;font-weight: bold;"><?php echo $block->getAttribute('summary:'.$sitelocale); ?></p>
                    <p><?php echo $block->getAttribute('content:'.$sitelocale); ?>
                    </p>
            <?php }?>
        <?php endforeach;?>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-6">
            <?php foreach($blocks as $block_key => $block):?>
                <?php if($block->block_key === 'Set-up-your-account'){?>
                    <span style='width: 48px;height: 48px;line-height: 52px;-moz-border-radius: 50%;font-weight: bold;font-size: 24px;border-radius: 61%;border: solid 1px #34b7ff;color: #fff;text-align: center;margin-bottom: 14px;background-color: #34b7ff;display: block;'> 1
                    </span>
                    <p style="font-size: 20px;color: black;font-weight: bold;"><?php echo $block->getAttribute('summary:'.$sitelocale); ?></p>
                    <p>
                        <?php echo $block->getAttribute('content:'.$sitelocale); ?>
                    </p>
                 <?php }?>
            <?php endforeach;?>
        </div>
        <div class="col-md-6">
            <?php foreach($blocks as $block_key => $block):?>
                <?php if($block->block_key === 'Personalized-daily-DM'){?>
                    <span style='width: 48px;height: 48px;line-height: 52px;-moz-border-radius: 50%;font-weight: bold;font-size: 24px;border-radius: 61%;border: solid 1px #34b7ff;color: #fff;text-align: center;margin-bottom: 14px;background-color: #34b7ff;display: block;'> 2
                    </span>
                    <p style="font-size: 20px;color: black;font-weight: bold;"><?php echo $block->getAttribute('summary:'.$sitelocale); ?></p>
                    <p>
                        <?php echo $block->getAttribute('content:'.$sitelocale); ?>
                    </p>
                <?php }?>
            <?php endforeach;?>
        </div>
    </div>
    <br/>
       <div class="row">
        <div class="col-md-6">
            <?php foreach($blocks as $block_key => $block):?>
                <?php if($block->block_key === 'Meet-new-people'){?>
                    <span style='width: 48px;height: 48px;line-height: 52px;-moz-border-radius: 50%;font-weight: bold;font-size: 24px;border-radius: 61%;border: solid 1px #34b7ff;color: #fff;text-align: center;margin-bottom: 14px;background-color: #34b7ff;display: block;'> 3
                    </span>
                    <p style="font-size: 20px;color: black;font-weight: bold;"><?php echo $block->getAttribute('summary:'.$sitelocale); ?></p>
                    <p>
                        <?php echo $block->getAttribute('content:'.$sitelocale); ?>
                    </p>
                 <?php }?>
            <?php endforeach;?>
        </div>
        <div class="col-md-6">
            <?php foreach($blocks as $block_key => $block):?>
                <?php if($block->block_key === 'Find-interesting-content.'){?>

                    <span style='width: 48px;height: 48px;line-height: 52px;-moz-border-radius: 50%;font-weight: bold;font-size: 24px;border-radius: 61%;border: solid 1px #34b7ff;color: #fff;text-align: center;margin-bottom: 14px;background-color: #34b7ff;display: block;'> 4
                    </span>
                    <p style="font-size: 20px;color: black;font-weight: bold;"><?php echo $block->getAttribute('summary:'.$sitelocale); ?></p>
                    <p>
                        <?php echo $block->getAttribute('content:'.$sitelocale); ?>
                    </p>
                    
                <?php }?>
            <?php endforeach;?>
        </div>
    </div>
</div>
@endsection
