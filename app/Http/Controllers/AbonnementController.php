<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AbonnementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {  
        if (!NULL == Auth::user()){
        $id = Auth::user()->id;

        $achats = DB::select('select idVideo from achat where idUtilisateur = '.$id);  
        $abonnements = DB::select('select boolEstAbo from abonnement where idUtilisateur = '.$id); 
        $typesAbonnements = DB::select('select * from type_abonnement');
        
        return view('abonnement', ['achats' => $achats,'abonnements'=> $abonnements,'typesAbonnements' => $typesAbonnements]);   
        }       
    }

    public function AchatVideoOuAbonnement($n)
    {
        if (!NULL == Auth::user()){
            $id = Auth::user()->id;
            
            $achats = DB::select('select idVideo from achat where idUtilisateur = '.$id);
            $abonnements = DB::select('select boolEstAbo from abonnement where idUtilisateur = '.$id);
            $typesAbonnements = DB::select('select * from type_abonnement');
            $videos = DB::select('select * from video where idVideo = ?', [$n]); 

            return view('abonnement', ['achats' => $achats,'abonnements'=> $abonnements,'typesAbonnements' => $typesAbonnements,'videos' => $videos]);  
        }

        $typesAbonnement = DB::select('select * from type_abonnement');        
        $video = DB::select('select * from video where idVideo = ?', [$n]);       
        return view('abonnement', ['typesAbonnement' => $typesAbonnement, 'video' => $video]);
    }

    public function ValidationAchatAbonnement($n)
    {
        $duree = $_GET['duree'];
                              
        DB::insert('insert into abonnement (dateDebutAbonnement, dateFinAbonnement, boolEstAbo, idTypeAbonnement, idUtilisateur) values (CURDATE(), DATE_ADD(CURDATE(), INTERVAL ? DAY), ?, ?, ?)', [ $duree, 1, $_GET['typeAbonnement'], $_GET['id']]);

        return redirect('./video/'.$n);
    }

    public function ValidationAchatAbonnement2()
    {
        $duree = $_GET['duree'];
                              
        DB::insert('insert into abonnement (dateDebutAbonnement, dateFinAbonnement, boolEstAbo, idTypeAbonnement, idUtilisateur) values (CURDATE(), DATE_ADD(CURDATE(), INTERVAL ? DAY), ?, ?, ?)', [ $duree, 1, $_GET['typeAbonnement'], $_GET['id']]);

        return redirect('/');
    }

    public function ValidationAchatVideo($n)
    {

        DB::insert('insert into achat (datAchat, boolEstGratuite, idVideo, idUtilisateur) values (CURDATE(), ?, ?, ?)', [ $_GET['estGratuite'], $n, $_GET['id']]);

        return redirect('./video/'.$n);
    }

    public function supprAbonnement($id)
	{		

		DB::table('abonnement')->where('idUtilisateur', '=', $id)->delete();

		return redirect(url('user/'.$id.'/parametres'));
	}
}
