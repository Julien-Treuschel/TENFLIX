<?php

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

function activeMenuAbonnement(){
        if(!Auth::guest()){
            $id = Auth::user()->id;
            $abonnements = DB::select('select boolEstAbo from abonnement where idUtilisateur = '.$id);                      
        
        foreach($abonnements as $abonnement){
            $estAbonne = $abonnement->boolEstAbo;  
            if ($estAbonne == 1){
                return $estAbonne;
            }                     
        }
    }
        return 0;
    }

?>