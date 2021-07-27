<?php

namespace App\Http\Controllers;

use App\Models\Backblog;
use App\Models\BlogArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $blogcontents = Backblog::paginate(4);
        $blogarticles = BlogArticle::all();
        return view('pages.blog', compact('blogcontents', 'blogarticles'));
    }
}
