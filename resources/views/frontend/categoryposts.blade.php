@extends('welcomelinks')

@section('content')

<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"></div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1" >
            @foreach($posts as $key=>$post)
            <div class="item "> 
               
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="{{ asset('uploads/post/'.$post->image) }}" alt="" class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="post/{{ $post->id }}" class="text-white"> {{ $post->name }} </a>
                        <div class="fh5co_latest_trading_date_and_name_color"><i class="fa fa-clock-o"></i>&nbsp;&nbsp; {{ $post->created_at->format('M d,Y') }}</div>
                    </div>
                </div>
            </div>
          
             @endforeach
        </div>
    </div>
</div>

@endsection