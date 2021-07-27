<?php

namespace App\Http\Controllers;

use App\Models\Backblog;
use App\Models\BlogArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackblogController extends Controller
{
    public function index()
    {
        $backblogs = Backblog::all();
        $blogarticles = BlogArticle::all();
        return view('pages.backoffice.backblog', compact('backblogs', 'blogarticles'));
    }

    public function store(Request $request)
    {
        $store = new Backblog;
        $store->title = $request->title;
        $store->text = $request->text;
        $store->img = $request->img;
        $store->save();
        return redirect('/backoffice/blog')->with('message', 'Your content was added successfully !');
    }
    public function destroy($id){
        $destroy = Backblog::find($id);
        $destroy->delete();
        return redirect('/backoffice/blog');
    }
    public function show(BackBlog $id){ 
        $show = $id;
        // return redirect("/backoffice/{id}/show", compact("show"));
        return view("pages.backoffice.backBlogShow", compact("show"));
    }

    public function edit($id){
        $edit = Backblog::find($id);
        return view("pages.backoffice.backBlogShow", compact("edit"));
    }

    public function update($id, Request $request){
        $update = Backblog::find($id);
        $update->title = $request->title;
        $update->text = $request->text;
        $update->img = $request->img;
        $update->save();
        return redirect("/backoffice/blog");
    }
    // --------------------------------------------------
    public function editt($id)
    {
        $editt = BlogArticle::find($id);
        return view("pages.showfront.blogShow", compact("editt"));
    }

    public function updatee($id, Request $request)
    {
        $update = BlogArticle::find($id);
        $update->titleBlog = $request->titleBlog;
        $update->para1 = $request->para1;
        $update->save();
        return redirect("/backoffice/blog");
    }
}