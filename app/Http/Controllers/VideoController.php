<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    /**
     * Show the video.
     */
    public function viewVideo($n)
    {
        return view('video');
    }
}
