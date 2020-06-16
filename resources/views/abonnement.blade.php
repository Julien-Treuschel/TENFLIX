@extends('layouts.app')

@section('content')

<?php 
$id = Auth::user()->id;
$extension = substr( strrchr(url()->current(), '/')  ,1);
$racine = url('/');

if (!NULL == Auth::user()){
  $id = Auth::user()->id;
  foreach($abonnements as $abonnement){
      $estAbonne = $abonnement->boolEstAbo;  
  }
  foreach($achats as $achat){
      $videoAchete = $achat->idVideo; 
      if ($extension != "abonnement"){
        if  ($videoAchete == $video->idVideo){
          $videoAchete = 1;
        } else {
          $videoAchete = 0;
       }
      }      
  }                        
}
else {
  $estAbonne = 0;
  $videoAchete = 0;
}

if (!isset($estAbonne)){
  $estAbonne = 0;
} 
if (!isset($videoAchete)){
  $videoAchete = 0;
}

if ($estAbonne == 1 || $videoAchete == 1){
//   return redirect()->action(
//     'VideoController@viewVideo', ['n' => $extension]
// )->send();
}
?>

<div class="container-fluid">
@foreach($typesAbonnements as $typeAbonnement)
<div class="row">
  <div class="col-sm-3">
    <div class="card">
    <img class="card-img-top" src="{{asset('images/'.$typeAbonnement->urlImage)}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$typeAbonnement->typeAbonnement}}</h5>
        <p class="card-text">Durée : {{round($typeAbonnement->dureeAbonnement /31)}} mois </p>
        <p class="card-text">{{$typeAbonnement->nbJourEssai}} Jours d'essai</p>
        <p class="card-text">{{$typeAbonnement->prix}}€</p>
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="frmTransaction" id="frmTransaction">
          <input type="hidden" name="business" value="sb-x07tp2209206@business.example.com">
          <input type="hidden" name="cmd" value="_xclick">
          <input type="hidden" name="item_name" value="{{$typeAbonnement->typeAbonnement}}">
          <input type="hidden" name="item_number" value="1">
          <input type="hidden" name="amount" value="{{$typeAbonnement->prix}}">   
          <input type="hidden" name="currency_code" value="EUR">   
          <input type="hidden" name="cancel_return" value="{{url()->current()}}">
          @if ($extension != "abonnement")
          <input type="hidden" name="return" value="{{$racine}}/validationAbonnement/{{$extension}}?id={{$id}}&typeAbonnement={{$typeAbonnement->IdTypeAbonnement}}&duree={{$typeAbonnement->dureeAbonnement + $typeAbonnement->nbJourEssai}}/">
          @else 
          <input type="hidden" name="return" value="{{$racine}}/validationAbonnement?id={{$id}}&typeAbonnement={{$typeAbonnement->IdTypeAbonnement}}&duree={{$typeAbonnement->dureeAbonnement + $typeAbonnement->nbJourEssai}}/">
          @endif
          <input class="btn btn-primary" type="submit" value="S'ABONNER">
        </form>
        <!--<script>document.frmTransaction.submit();</script>-->
      </div>
    </div>
  </div>                               
@endforeach 
<!-- Pour acheter directement la video -->
@if ($extension != "abonnement")
@foreach($videos as $laVideo)
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
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="frmTransaction" id="frmTransaction">
          <input type="hidden" name="business" value="3ZLMN2B34944W">
          <input type="hidden" name="cmd" value="_xclick">
          <input type="hidden" name="item_name" value="{{$laVideo->titreVideo}}">
          <input type="hidden" name="item_number" value="1">
          <input type="hidden" name="amount" value="{{$laVideo->prixVideo}}">   
          <input type="hidden" name="currency_code" value="EUR">   
          <input type="hidden" name="cancel_return" value="{{url()->current()}}">
          <input type="hidden" name="return" value="{{$racine}}/validationVideo/{{$extension}}?id={{$id}}&estGratuite={{$laVideo->boolEstGratuite}}/">
          <input class="btn btn-primary" type="submit" value="ACHETER">
        </form>
      </div>
    </div>
  </div>    
@endforeach 
@endif  
</div>

@endsection