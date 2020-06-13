<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Show the video.
     */
    public function index()
    {
        $videos = DB::select('select * from video');
        
        return view('Welcome', ['videos' => $videos]);          
    }
}