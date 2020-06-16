@extends('layouts.app')

@section('content')

@foreach($video as $laVideo)

<?php 
$extension = substr( strrchr(url()->current(), '/')  ,1);
$racine = url('/');

    $urlRenverse = strrev($laVideo->urlVideo); 
    $AarrayUrlCut = explode("/", $urlRenverse, 2);
    $urlCut = $AarrayUrlCut[0];
    $urlCut = strrev($urlCut);
?>
<div class="container">
    <div class="embed-responsive embed-responsive-16by9">
                                <!-- src="https://www.youtube.com/embed/fin video" 
                            <form class="mt5" action="{{ url("/") }}" method="post">-->
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$urlCut}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
    </div>
</div>
<div class="container">
<h1 class="display-3">{{ $laVideo->titreVideo }}</h1>
        <br/>
        <p class="card-text"><em>{{ $laVideo->descriptionVideo }}</em></p>
        <br/>
        <hr>    
        <p><kbd>Commentaires :</kbd></p>
        <div class="card">
            @foreach($commentaires as $commentaire)
            <strong>Utilisateur : {{$commentaire->name}}</strong>
            <blockquote class="blockquote">
            <div class="card-body">Message : {{$commentaire->commentaire}}</div>
            </blockquote>
                
                <br/>
            @endforeach 
        </div> 

        <?php if(Auth::guest()): ?>
        <hr>
        <p class="text-danger">Vous devez être connecté pour pouvoir poster un commentaire !</p>
        <hr>
        <?php else: ?>
        <hr>
        <form class="mt5" action="{{$racine}}/store/{{$laVideo->idVideo}}" method="post">
        {{ csrf_field() }}	
            <div class="form-group">
                <textarea name="body" placeholder="Votre commentaire..." cols="70" rows="3"></textarea>
                @if($errors->has('body'))
                    <p class="help is-danger">{{$errors->first('body')}}</p>
                @endif
                
            </div> 
            <button type="submit" class="btn btn-dark" type=>Commenter</button>
        </form>
        <hr>
        <?php endif; ?>
        
</div>

@endforeach 

@endsection