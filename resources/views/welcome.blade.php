@extends('layouts.app')

@section('content')

<?php
//<!-- Boucle categories -->
foreach ($categories as $categorie) {
?>
    <div class="container-fluid">
        <div class="row" wfd-id="3">
            <h3 class="display-3 text-center bg-primary"><?php echo $categorie->nomCategorie ?></h3>
            <!-- <a href="http://tenflix/video/ID video"> -->
            <!-- Boucle video -->
            <div id="myCarousel" class="carousel slide">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php
                    //<!-- Boucle video -->
                    foreach ($videos as $video) {
                        //<!-- Boucle categorie video -->
                        foreach ($categorievideos as $categorievideo) {
                            if ($categorievideo->idCategorie == $categorie->idCategorie and $categorievideo->idVideo == $video->idVideo) {
                    ?>
                                <div class="item active">
                                    <div class="col-md-3" wfd-id="44">
                                        <div class="card mb-3 shadow-sm" wfd-id="45">
                                            <?php
                                            if (!NULL == Auth::user()) {
                                                $id = Auth::user()->id;
                                                foreach ($abonnements as $abonnement) {
                                                    $estAbonne = $abonnement->boolEstAbo;
                                                }
                                                foreach ($achats as $achat) {
                                                    $videoAchete = $achat->idVideo;
                                                    if ($videoAchete == $video->idVideo) {
                                                        $videoAchete = 1;
                                                    } else {
                                                        $videoAchete = 0;
                                                    }
                                                }
                                            } else {
                                                $estAbonne = 0;
                                                $videoAchete = 0;
                                            }
                                            if (!isset($estAbonne)) {
                                                $estAbonne = 0;
                                            }
                                            if (!isset($videoAchete)) {
                                                $videoAchete = 0;
                                            }

                                            //On recup un fragement d'url
                                            $urlRenverse = strrev($video->urlVideo);
                                            $AarrayUrlCut = explode("/", $urlRenverse, 2);
                                            $urlCut = $AarrayUrlCut[0];
                                            $urlCut = strrev($urlCut);
                                            ?>

                                            @if ($video->boolEstGratuite == 1 || $estAbonne == 1 || $videoAchete == 1)
                                            <a href="./video/{{ $video->idVideo }}">
                                                @else
                                                <a href="./abonnement/{{ $video->idVideo }}">
                                                    @endif
                                                    <!-- src="http://i1.ytimg.com/vi/Url video/maxresdefault.jpg" -->
                                                    <img width="100%" height="225" src="http://i1.ytimg.com/vi/{{$urlCut}}/maxresdefault.jpg" alt="miniature" />
                                                </a>
                                                <div class="carousel-caption">
                                                    <!-- ancien "video payante" -->
                                                </div>
                                                <div class="card-body" wfd-id="46">
                                                    <dt class="text-truncate">{{ $video->titreVideo }}</dt>
                                                    <br />
                                                    <!-- class="card-text"> Titre video </p> -->
                                                    <p class="card-text">{{ $video->descriptionVideo }}</p>
                                                    <div class="d-flex justify-content-between align-items-center" wfd-id="47">
                                                        <!-- class="text-muted">Minutes video</small>                   -->
                                                        <small class="text-muted">Temps à definir !</small>
                                                    </div>
                                                </div>
                                                <br/>
                                                @if ($video->boolEstGratuite == 0 && $estAbonne == 0 && $videoAchete == 0)
                                                <p><code>Video payante !</code></p>
                                                   
                                                    @endif
                                        </div>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    }
                    ?>
                </div>
                <!-- Left and right controls@endforeach   -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        <?php
    }
        ?>
        </div>
    </div>

    @endsection