@extends('frontendtemplate')
@section('content')
    
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            {{-- <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(frontendtemplate/img/bg-img/breadcumb.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Welcome</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Music World <span>Music Life</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="#" class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 --}}
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(frontendtemplate/img/bg-img/bg-4.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">No Music No Life</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Love Music <span>Welcome</span></h2>
                               {{--  <a data-animation="fadeInUp" data-delay="500ms" href="#" class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="latest-albums-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p>What is hot today</p>
                        <h2>Artists</h2>
                    </div>
                </div>
            </div>
            

             <div class="row">
                <div class="col-12">
                    <div class="albums-slideshow owl-carousel">
                        <!-- Single Album -->
                           @foreach($artist as $artists)
                        <div class="single-album">
                            <img src="{{asset($artists->photo)}}">
                            <div class="album-info">
                                <a href="{{route('artistalbumpage',$artists)}}">
                                    <h5>{{$artists->name}}</h5>
                                </a>
                               
                            </div>
                        </div>
                        @endforeach
                                               
                    </div>
                </div>
            </div>
        {{-- <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="{{asset('frontendtemplate/img/bg-img/wt7.jp')}}" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Sam Smith</h6>
                                    <p>Underground</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div> --}}
    </section>
    
    <section class="latest-albums-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p>What is hot today</p>
                        <h2>Albums</h2>
                    </div>
                </div>
            </div>
            

             <div class="row">
                <div class="col-12">
                    <div class="albums-slideshow owl-carousel">
                        <!-- Single Album -->
                           @foreach($album as $albums)
                        <div class="single-album">
                            <img src="{{asset($albums->photo)}}">
                            <div class="album-info">
                                <a href="{{route('songpage',$albums->id)}}">
                                    <h5>{{$albums->title}}</h5>
                                </a>
                               
                            </div>
                        </div>
                        @endforeach
                                               
                    </div>
                </div>
            </div>
        {{-- <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="{{asset('frontendtemplate/img/bg-img/wt7.jp')}}" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Sam Smith</h6>
                                    <p>Underground</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div> --}}
    </section>
    
    
    @endsection