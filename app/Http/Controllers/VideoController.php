<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    /**
     * Show the video.
     */
    public function viewVideo($n)
    {
        $id = auth()->id();
        $video = DB::select('select * from video where idVideo = ?', [$n]);
        $commentaires = DB::select('select u.name, c.commentaire from users as u, commentaire as c where u.id = c.idUtilisateur and c.idVideo = ?', [$n]);
        
        return view('video', ['video' => $video,'commentaires' => $commentaires]);
    }
}
