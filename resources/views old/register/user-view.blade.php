@extends('layouts.master')
@section('content')
<div style="background: rgb(137,184,233);background: linear-gradient(180deg, rgba(137,184,233,1) 75%, rgba(111,150,190,1) 100%);">
  <?php foreach($blocks as $block_key => $block):?>
    <?php if($block->block_key === 'reg_title'){ ?>
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
  <?php endforeach;?>
</div><br/>
    <div class="container">
        <div class="text-item h2 center">
           <?php echo $translations['personal-details-title'];?> 
        </div>
        <form method="POST" action="{{route('register.user')}}" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label>First Name</label>
                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                    @if ($errors->has('first_name'))
                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                    @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label>Last Name</label>
                <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}">
                    @if ($errors->has('last_name'))
                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                    @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{old('email')}}">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label>Phone</label>
                <input type="tel" class="form-control" name="phone" value="{{old('phone')}}">
                    @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-left mr-auto">
                 <button type="submit" id="btn1" class="btn btn-primary">Next</button>
            </div>
        </div>
        </form>
        <div class="text-item captcha">
            <?php echo $translations['personal-details-content'];?> 
            <a class="link" href="" target="_blank"><?php echo $translations['personal-details-termsofservice'];?> </a>
        </div>
        <?php foreach($blocks as $block_key => $block):?>
        <?php if($block->block_key === 'Post-ads'){ ?>
        <div class="cc-benefits">
            <h3 class="section-title"><?php echo $block->getAttribute('title:'.$sitelocale); ?></h3>
            <div class="features">
                <div id="copy">
                    <p><?php echo $block->getAttribute('summary:'.$sitelocale); ?></p>

                    <?php echo $block->getAttribute('content:'.$sitelocale); ?>
                    
                </div>
            </div>
        </div>
        <?php }?>
        <?php endforeach;?>
    </div>
@endsection
