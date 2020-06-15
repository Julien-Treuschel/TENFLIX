@extends('layouts.app')

@section('content')

@foreach($video as $laVideo)

<?php 
    $urlRenverse = strrev($laVideo->urlVideo); 
    $AarrayUrlCut = explode("/", $urlRenverse, 2);
    $urlCut = $AarrayUrlCut[0];
    $urlCut = strrev($urlCut);
?>
<div class="container">
    <div class="embed-responsive embed-responsive-16by9">
                                <!-- src="https://www.youtube.com/embed/fin video" -->
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$urlCut}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
    </div>
</div>
<div class="container">
<h1 class="display-3">{{ $laVideo->titreVideo }}</h1>
        <br/>
        <p class="card-text"><em>{{ $laVideo->descriptionVideo }}</em></p>
        <br/>
        <p>Commentaires !</p>
</div>

@endforeach 

@endsection