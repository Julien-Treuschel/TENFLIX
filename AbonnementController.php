<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AbonnementController extends Controller
{
    public function index()
    {
        $typesAbonnement = DB::select('select * from type_abonnement');
        
        return view('abonnement', ['typesAbonnement' => $typesAbonnement]);          
    }

    public function AchatVideoOuAbonnement($n)
    {
        $typesAbonnement = DB::select('select * from type_abonnement');        
        $video = DB::select('select * from video where idVideo = ?', [$n]);       
        return view('abonnement', ['typesAbonnement' => $typesAbonnement, 'video' => $video]);
    }
}
