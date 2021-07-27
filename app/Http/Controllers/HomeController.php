<?php

namespace App\Http\Controllers;

use App\Models\Backhome;
use App\Models\BlogArticle;
use App\Models\HomeArticle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homecontents = Backhome::all();
        $homearticles = HomeArticle::all();
        return view('welcome', compact('homecontents', 'homearticles'));
    }
}
