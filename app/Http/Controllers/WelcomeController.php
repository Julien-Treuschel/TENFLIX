<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class WelcomeController extends Controller
{
    /**
     * Show the video.
     */
    public function index()
    {
        if (!NULL == Auth::user()){
            $id = Auth::user()->id;
            $achats = DB::select('select idVideo from achat where idUtilisateur = '.$id);
            $abonnements = DB::select('select boolEstAbo from abonnement where idUtilisateur = '.$id);
            $videos = DB::select('select * from video');

            return view('Welcome', ['videos' => $videos,'abonnements' => $abonnements,'achats' => $achats]);  
        }   
        
        $videos = DB::select('select * from video');
        
        return view('Welcome', ['videos' => $videos]);          
    }
}