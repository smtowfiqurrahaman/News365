<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>X-News</title>
    <link href="{{ asset('frontend/css/media_query.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('frontend/css/owl.theme.default.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/css/style_1.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="{{ asset('frontend/js/modernizr-3.5.0.min.js') }}"></script>
</head>
<body>
    <!-- Heading -->
    <div class="container-fluid fh5co_header_bg">

   {{--  <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                    class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;Friday, 5 January 2018</a>
                <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#" class="treding_btn">Trending</a>
                    <div class="fh5co_treding_position_absolute"></div>
                </div>
                <a href="#" class="color_fff fh5co_mediya_setting">Instagram’s big redesign goes live with black-and-white app</a>
            </div>
        </div>
    </div> --}}

</div>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
               <a href="{{ route('welcome') }}"> <img src="{{ asset('frontend/images/logo.png') }}" alt="img" class="fh5co_logo_width"/></a>
            </div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://fb.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
                </div>
                <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                <div class="d-inline-block text-center dd_position_relative ">
                    <select class="form-control fh5co_text_select_option">
                        <option>English </option>
                        <option>French </option>
                        <option>German </option>
                        <option>Spanish </option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

{{-- NAV Section ^^^ --}}

<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container-fluid padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="{{ asset('frontend/images/logo.png') }}" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <?php $categories=DB::table('categories')->get(); ?>
                    
                    @foreach($categories as $category)
                    <li class="nav-item {{ Request::is('view/'.$category->slug)? 'active' : '' }}">
                        
         <a class="nav-link" href="{{ route('view.category',  $category->slug) }}">{{ $category->name }}</a><span class="sr-only"></span>
                     </li>
                    @endforeach 
                </ul>
            </div>
        </nav>
    </div>
</div> 
    <!-- Heading -->

@yield('content');


<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5"><img src="{{ asset('frontend/images/white_logo.png') }}" alt="img" class="footer_logo"/></div>
            <div class="clearfix"></div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="footer_main_title py-3"> About</div>
                <div class="footer_sub_about pb-3"> Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
                <div class="footer_mediya_icon">
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                    </a></div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="footer_main_title py-3"> Category</div>
                <ul class="footer_menu">
                     @foreach($categories as $key=>$category)
                      <li><a href="{{ route('view.category',  $category->slug) }}" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; {{ $category->name }}</a></li>  
                     @endforeach 
                    {{-- <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Business</a></li>
                     --}}
                </ul>
            </div>
            <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                <div class="footer_main_title py-3"> Most Viewed Posts</div>
                <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                <div class="footer_position_absolute"><img src="{{ asset('frontend/images/footer_sub_tipik.png') }}" alt="img" class="width_footer_sub_img"/></div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="footer_main_title py-3"> Last Modified Posts</div>
                @foreach($news as $post)
                <a href="#" class="footer_img_post_6"><img src="{{ asset('uploads/post/'.$post->image) }}" alt="img"/></a>
                @endforeach
                {{-- <a href="#" class="footer_img_post_6"><img src="{{ asset('frontend/images/download (1).jpg') }}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('frontend/images/science-578x362.jpg') }}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('frontend/images/vil-son-35490.jpg') }}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('frontend/images/zack-minor-15104.jpg') }}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('frontend/images/download.jpg') }}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('frontend/images/download (2).jpg') }}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('frontend/images/ryan-moreno-98837.jpg') }}" alt="img"/></a> --}}
            </div>
        </div>
        <div class="row justify-content-center pt-2 pb-4">
            <div class="col-12 col-md-8 col-lg-7 ">
                <div class="input-group">
                    <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control fh5co_footer_text_box" placeholder="Enter your email..." aria-describedby="basic-addon1">
                    <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-12 py-4 Reserved"> © Copyright 2022, All rights reserved. Developed by <a href="https://smtowfiqurrahaman.github.io/Towfiq.com" title="S. M. Towfiqur Rahaman" target="_blank">S. M. Towfiqur Rahaman</a>. & <a href="https://appilet.netlify.app" target="_blank">Other Deign</a>  </div>
{{--             <div class="col-12 col-md-6 spdp_right py-4">
                <a href="#" class="footer_last_part_menu">Home</a>
                <a href="Contact_us.html" class="footer_last_part_menu">About</a>
                <a href="Contact_us.html" class="footer_last_part_menu">Contact</a>
                <a href="blog.html" class="footer_last_part_menu">Latest News</a>
            </div> --}}
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
<!-- Main -->
<script src="{{ asset('frontend/js/main.js') }}"></script>

</body>
</html>

