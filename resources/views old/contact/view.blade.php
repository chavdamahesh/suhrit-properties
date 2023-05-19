@extends('layouts.master')

@section('title', 'Contact Us')

@section('content')

<div style="background: rgb(137,184,233);background: linear-gradient(180deg, rgba(137,184,233,1) 75%, rgba(111,150,190,1) 100%);">
  <?php foreach($blocks as $block_key => $block):?>
    <?php if($block->block_key === 'contact-us'){ ?>
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
        <h3 class="heading">HAVE A QUESTION OR JUST WANT TO CONTACT US?</h3>
        <p class="title">Please fill out the form below and we will reply shortly</p>
      <form method="POST" action="/contact" id ="form" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="name" id="name" size="30" value="" placeholder="{{ $translations['name'] }}" class="form-control placeholder" />
          @if ($errors->has('name'))
              <span class="text-danger">{{ $errors->first('name') }}</span>
          @endif
        </div>

        <div class="form-group af-inner">
            <input type="text" name="email" id="email" size="30" value="" placeholder="{{ $translations['email'] }} *" class="form-control placeholder" />
          @if ($errors->has('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
        </div>
        <div class="form-group">
            <input type="text" name="subject" id="subject" size="30" value="" placeholder="{{ $translations['subject'] }}" class="form-control placeholder" />
          @if ($errors->has('subject'))
              <span class="text-danger">{{ $errors->first('subject') }}</span>
          @endif
        </div>             
        <div class="form-group">
            <textarea name="message" id="message" cols="40" rows="10" placeholder="{{ $translations['message'] }} *" class="form-control placeholder"></textarea>
          @if ($errors->has('message'))
              <span class="text-danger">{{ $errors->first('message') }}</span>
          @endif
        </div>
        <div class="top_label">
          <div class="mb-0">
             <button type="submit" id="btn_submit" class="btn btn-lg btn-block">SEND MESSAGE</button>
          </div>
        </div>
      </form>
    </div>
@endsection
