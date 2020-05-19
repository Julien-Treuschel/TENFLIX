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
        $video = DB::select('select * from video where idVideo = ?', [$n]);
        
        return view('video', ['video' => $video]);
    }
}
