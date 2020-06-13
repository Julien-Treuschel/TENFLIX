@extends('layouts.app')

@section('content')

<div class="container-fluid">
@foreach($typesAbonnement as $typeAbonnement)
<div class="row">
  <div class="col-sm-3">
    <div class="card">
    <img class="card-img-top" src="{{asset('images/'.$typeAbonnement->urlImage)}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$typeAbonnement->typeAbonnement}}</h5>
        <p class="card-text">Durée : {{round($typeAbonnement->dureeAbonnement /31)}} mois </p>
        <p class="card-text">{{$typeAbonnement->nbJourEssai}} Jours d'essai</p>
        <p class="card-text">{{$typeAbonnement->prix}}€</p>
        <a href="#" class="btn btn-primary">S'ABONNER</a>
      </div>
    </div>
  </div>                               
@endforeach 
<!-- Pour acheter directement la video -->
@foreach($video as $laVideo)
<?php $urlRenverse = strrev($laVideo->urlVideo); 
    $AarrayUrlCut = explode("/", $urlRenverse, 2);
    $urlCut = $AarrayUrlCut[0];
    $urlCut = strrev($urlCut);
?>
<div class="row">
  <div class="col-sm-3">
    <div class="card">
    <img class="card-img-top" width="70%" height="70%" src="http://i1.ytimg.com/vi/{{$urlCut}}/maxresdefault.jpg" alt="miniature">
      <div class="card-body">
        <p class="card-text">Preferez vous acheter la video ?</p>
        <p class="card-text">Titre : {{ $laVideo->titreVideo }}</p>
        <p class="card-text">Description : {{ $laVideo->descriptionVideo }}</p>
        <p class="card-text">{{$laVideo->prixVideo}}€</p>
        <a href="#" class="btn btn-primary">SELECTIONNER</a>
      </div>
    </div>
  </div>    
@endforeach   
</div>

@endsection