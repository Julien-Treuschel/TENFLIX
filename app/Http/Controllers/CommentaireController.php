<?php

namespace App\Http\Controllers;



use App\Http\Controllers\Controller;

use App\Video;

use App\Commentaire;
use Auth;
use DB;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

class CommentaireController extends Controller
{
    public function store(Video $n)
    {
        // request()->validate([
        //     'body' => ['required'],

        // ]);

        if (!NULL == Auth::user()) {
            $id = auth()->id();
            $idVideo = $n->idVideo;
            $commentaire = request('body');


            DB::insert('insert into commentaire (commentaire, idVideo, idUtilisateur) values (?, ?, ?)', [$commentaire, $idVideo, $id]);


            return back();
        }
    }
}
