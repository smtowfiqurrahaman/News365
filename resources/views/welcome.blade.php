@extends('welcomelinks')

@section('content')


{{-- Menus Section ^^^ --}}
<div class="container-fluid paddding mb-5">
   
    <div class="row mx-0">
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            @foreach($leftPost as $post)
            <div class="fh5co_suceefh5co_height"><img src="{{ asset('uploads/post/'.$post->image) }}" alt="img"/ class="img img-fluid img-center">
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class=""><a href="post/{{ $post->id }}" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $post->created_at->format('M d, Y') }}
                    </a></div>
                    <div class=""><a href="post/{{ $post->id }}" class="fh5co_good_font">{{ $post->name }}</a></div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="col-md-6">
            <div class="row">
            @foreach($rightPost as $post)
              <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="{{ asset('uploads/post/'.$post->image) }}" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="post/{{ $post->id }}" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $post->created_at->format('M d, Y') }}</a></div>
                            <div class=""><a href="post/{{ $post->id }}" class="fh5co_good_font_2">{{ $post->name }}</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
      </div>
    </div>              
</div>


{{-- 2nd Section Tranding --}}
<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1" >
            @foreach($posta as $key=>$post)
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


<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News {{-- Right Post --}}</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
             @foreach($posta as $post)
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="{{ asset('uploads/post/'.$post->image) }}" alt=""/></div>
                    <div>
                        <a href="post/{{ $post->id }}" class="d-block fh5co_small_post_heading"><span class="">{{ $post->name }}</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i>{{ $post->created_at->format('M d, Y') }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Letest</div>
                </div>

                @foreach($news as $post)
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="{{ asset('uploads/post/'.$post->image) }}" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="post/{{ $post->id }}" class="fh5co_magna py-2">{{ $post->name }} </a> <br>
                        <a href="post/{{ $post->id }}" class="fh5co_mini_time py-3"> {{ $post->created_at->format('M d, Y') }}</a> <br>
                        <div class="fh5co_consectetur">{{ $post->name }}</div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    @foreach($categories as $key=>$category)
                        <a href="{{ route('view.category',  $category->slug) }}" class="fh5co_tagg">{{ $category->name }}</a>
                     @endforeach 
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                </div>
                @foreach($posta as $key=>$post)
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <a href="post/{{ $post->id }}"><img src="{{ asset('uploads/post/'.$post->image) }}" alt="img" class="fh5co_most_trading"/></a>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> <a href="post/{{ $post->id }}">{{ $post->name }}</a></div>
                        <div class="most_fh5co_treding_font_123">{{ $post->created_at->format('M d, Y') }}</div>
                    </div>
                </div> 
                @endforeach
            </div>
        </div>

{{-- New Postssssssssssssssssssssssssssssssssssssssssssssssssss --}}
{{-- <div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News 2  Right Post -</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            @foreach($posts as $key=>$post)
            <div class="item"> 
               
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
</div> --}}






        <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
            <div class="col-12 text-center pb-4 pt-4">
                <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                <a href="#" class="btn_pagging">1</a>
                <a href="#" class="btn_pagging">2</a>
                <a href="#" class="btn_pagging">3</a>
                <a href="#" class="btn_pagging">...</a>
                <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
             </div>
        </div>
    </div>
</div>

@endsection





