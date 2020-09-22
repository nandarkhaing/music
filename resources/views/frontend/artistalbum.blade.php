@extends('frontendtemplate')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About us</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mixtape template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/styles/bootstrap-4.1.2/bootstrap.min.css')}}">
    <link href="{{asset('frontendtemplate/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/styles/artist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/styles/about.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/styles/about_responsive.css')}}">
</head>
<body>

    <div class="super_container">


        <div class="home">
            <div class="home_inner">
                <!-- Image artist: https://unsplash.com/@yoannboyer -->
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('frontendtemplate/images/featured.png')}}" data-speed="0.8"></div>
                <div class="home_container">
                    <div class="home_content text-center">
                        <div class="home_subtitle"></div>
                        <div class="home_title">Single Album</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Discs -->

        <div class="discs">
            <div class="container">
                <div class="row discs_row">

                    <!-- Disc -->
                    @foreach($album as $albums)
                    <div class="col-xl-4 col-md-6">
                        <div class="disc">
                            <a href="{{route('songpage',$albums->id)}}">
                                <div class="disc_image">

                                    <img src="{{asset($albums->photo)}}">
                                    <h2>{{($albums->title)}}</h2>
                                    <h5>Release Date{{($albums->release_date)}}</h5>

                                </div>
                                <div class="disc_container">
                                    <div>
                                        <div class="disc_content_1">
                                            <div class="disc_title"></div>
                                            <div class="disc_subtitle"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <!-- Disc -->


                </div>
            </div>
        </div>
        
        <!-- Artist -->

        
        @foreach($artist as $artists)
        <div class="artist">
            <div class="container">
               <center><h3 style="color: black">Artist Biograply</h3></center>
               <div class="row">
                <div class="col-md-6  artist_col order-lg-1 order-2">
                  
                    <div>
                     <img src="{{asset($artists->photo)}}">
                 </div>
             </div>

             <!-- Artist Info -->
             <div class="col-lg-6 order-lg-2 order-1">
                <div class="artist_info">
                    <div class="artist_name"><h3>{{$artists->name}}</h3></div>
                    
                    <div class="artist_info_list">
                        <ul>
                            <li>{{$artists->biography}}</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
@endforeach

</div>
<div class="song">

    <!-- Player -->
                          {{--   @foreach($songs as $song)
                            <h4 style="color: white">{{$song->title}}</h4>
                              <audio controls="" style="vertical-align: middle" src="{{asset($song->play)}}" type="audio/mp3" controlslist="nodownload"></audio>
                           
                              @endforeach --}}
                          </div>


                          <!-- Milestones -->

                          <!-- Footer -->



                          <script src="{{asset('frontendtemplate/js/jquery-3.2.1.min.js')}}"></script>
                          <script src="{{asset('frontendtemplate/styles/bootstrap-4.1.2/popper.js')}}"></script>
                          <script src="{{asset('frontendtemplate/styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
                          <script src="{{asset('frontendtemplate/plugins/greensock/TweenMax.min.js')}}"></script>
                          <script src="{{asset('frontendtemplate/plugins/greensock/TimelineMax.min.js')}}"></script>
                          <script src="{{asset('frontendtemplate/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
                          <script src="{{asset('frontendtemplate/plugins/greensock/animation.gsap.min.js')}}"></script>
                          <script src="{{asset('frontendtemplate/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
                          <script src="{{asset('frontendtemplate/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
                          <script src="{{asset('frontendtemplate/plugins/easing/easing.js')}}"></script>
                          <script src="{{asset('frontendtemplate/plugins/progressbar/progressbar.min.js')}}"></script>
                          <script src="{{asset('frontendtemplate/plugins/parallax-js-master/parallax.min.js')}}"></script>
                          <script src="{{asset('frontendtemplate/plugins/jPlayer/jquery.jplayer.min.js')}}"></script>
                          <script src="{{asset('frontendtemplate/plugins/jPlayer/jplayer.playlist.min.js')}}"></script>
                          <script src="{{asset('frontendtemplate/js/about.js')}}"></script>'
                      </body>
                      </html>
                      @endsection