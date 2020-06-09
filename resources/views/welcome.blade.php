@extends('layouts.app')

@section('content')
<div class="container-fluid">
    
      <div class="row" wfd-id="3">
        <h2> MUSIQUE </h2>
        <div id="myCarousel" class="carousel slide">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
            <!-- Boucle video -->
            @foreach($videos as $video)
            <div class="col-md-3" wfd-id="44">                       
                <div class="card mb-3 shadow-sm" wfd-id="45">                         
                <!-- <a href="http://tenflix/video/ID video"> -->                   
                    <?php $urlRenverse = strrev($video->urlVideo); 
                    $AarrayUrlCut = explode("/", $urlRenverse, 2);
                    $urlCut = $AarrayUrlCut[0];
                    $urlCut = strrev($urlCut);
                    ?>
                    <a href="./video/{{ $video->idVideo }}">
                                              <!-- src="http://i1.ytimg.com/vi/Url video/maxresdefault.jpg" -->                                                                                     
                    <img width="100%" height="225" src="http://i1.ytimg.com/vi/{{$urlCut}}/maxresdefault.jpg" alt="miniature" />
                    </a>
                    <div class="carousel-caption">
                        <h3>{{ $video->titreVideo }}</h3>                        
                    </div>                     
                    <div class="card-body" wfd-id="46">
                       <!-- class="card-text"> Titre video </p> -->
                    <p class="card-text">{{ $video->descriptionVideo }}</p>
                    <div class="d-flex justify-content-between align-items-center" wfd-id="47"> 
                        <!-- class="text-muted">Minutes video</small>                   -->
                        <small class="text-muted">Temps à definir !</small>
                    </div>
                    </div>                               
                </div>
                </div>
                @endforeach                 
            </div>
        </div>  
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        </div>                 
  
    </div>
</div>

@endsection
