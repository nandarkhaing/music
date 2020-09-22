@extends('frontendtemplate')
@section('content')

  
       

        <!-- Discs -->

        <div class="discs">
            <div class="container">
                <div class="row discs_row">

                    
                    @foreach($album as $albums)
                    <div class="col-xl-4 col-md-6">
                        <div class="disc">
                             <a href="{{route('songpage',$albums->id)}}"><h5>{{$albums->name}}></h5>
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

   
       
               <!-- Artist Content -->
               <div class="col-lg-7 offset-lg-5">
                <div class="artist_content">
                    <div class="section_title_container">
                        <div class="section_subtitle">Events</div>
                        <div class="section_title">

                        </div>
                        <div class="artist_text">


                        </div>
                        <div class="artist_sig"><img src="images/sig.png" alt=""></div>
                        <div class="single_player_container d-flex flex-column align-items-start justify-content-center">
                            <div class="single_player">
                                <div id="jplayer_2" class="jp-jplayer"></div>
                                <div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
                                    <div class="jp-type-single">
                                        <div class="player_details d-flex flex-row align-items-center justify-content-start">
                                            <div class="jp-details">
                                                <div>playing</div>
                                                <div class="jp-title" aria-label="title">&nbsp;</div>
                                            </div>
                                            <div class="jp-controls-holder ml-auto">
                                                <button class="jp-play" tabindex="0"></button>
                                            </div>
                                        </div>
                                        <div class="player_controls">
                                            <div class="jp-gui jp-interface d-flex flex-row align-items-center justify-content-start">
                                                <div class="jp-controls-holder time_controls d-flex flex-row align-items-center justify-content-start">
                                                    <div><div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div></div>
                                                    <div class="jp-progress">
                                                        <div class="jp-seek-bar">
                                                            <div class="jp-play-bar"></div>
                                                        </div>
                                                    </div>
                                                    <div><div class="jp-duration ml-auto" role="timer" aria-label="duration">&nbsp;</div></div>
                                                </div>
                                                <div class="jp-volume-controls d-flex flex-row align-items-center justify-content-start ml-auto">
                                                    <button class="jp-mute" tabindex="0"></button>
                                                    <div class="jp-volume-bar">
                                                        <div class="jp-volume-bar-value"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-no-solution">
                                            <span>Update Required</span>
                                            To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

    <!-- Milestones -->

    <!-- Footer -->

</div>


@endsection