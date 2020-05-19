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
                               <!-- src="https://www.youtube.com/embed/fin video" -->
  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$urlCut}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div> 
<div class="container">

    <p>{{ $laVideo->titreVideo }}</p>

</div>
<div class="container">
    <p>{{ $laVideo->descriptionVideo }}</p>
</div>

<div class="container">
    <p>Commentaires !</p>
</div>

@endforeach 

@endsection