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
                        <div class="home_subtitle">Music World</div>
                        <div class="home_title"><h4> Albums</h4></div>
                    </div>
                </div>
            </div>
        </div>
    <section class="album-catagory section-padding-100-0">
        <div class="container">
            <div class="row">
            {{-- <h4>Recommed Albums For U</h4>  --}}
         <div class="albums-slideshow owl-carousel">
          @foreach($artist as $artists)
                    <div class="single-album">
                        <img src="{{asset($artists->photo)}}">
                        <div class="album-info">
                            
                                <a href="{{route('artistalbumpage',$artists)}}"><h5>{{$artists->name}}</h5>
                                    <h5>{{$artists->id}}</h5>
                                   
                            </a>
                          
                        </div>
                    </div>
                    @endforeach
                    
   </div>
                {{-- <div class="row">
            <div class="col-12">
                <div class="albums-slideshow owl-carousel">
                   
                    @foreach($albums as $album)
                    <div class="single-album">
                        <img src="{{asset($album->photo)}}">
                        <div class="album-info">
                            
                                <a href="{{route('songpage',$album->id)}}"><h5>{{$album->title}}</h5>
                                   
                                   
                            </a>
                          
                        </div>
                    </div>
                    @endforeach 

            
        </div>
    </div>
    </div> --}}
</div>
    </section>
    <!-- ##### Album Catagory Area End ##### -->

    <!-- ##### Buy Now Area Start ##### -->
     <!-- Single Artist -->
                        

    <!-- ##### Song Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
   
    <!-- ##### Contact Area End ##### -->

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