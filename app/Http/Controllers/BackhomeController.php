<?php

namespace App\Http\Controllers;

use App\Models\Backhome;
use App\Models\HomeArticle;
use Illuminate\Http\Request;

class BackhomeController extends Controller
{
    public function index()
    {
        $backhomes = Backhome::all();
        $homearticles = HomeArticle::all();
        return view('pages.backoffice.backhome', compact('backhomes', 'homearticles'));
    }

    public function store(Request $request)
    {
        $store = new Backhome;
        $store->title = $request->title;
        $store->text = $request->text;
        $store->icon = $request->icon;
        $store->save();
        return redirect('/backoffice/home')->with('message', 'Your content was added successfully !');
    }

    public function destroy($id)
    {
        $destroy = Backhome::find($id);
        $destroy->delete();
        return redirect("/backoffice/home");
    }
    
    public function show(Backhome $id)
    {
        $show = $id;
        return view("pages.backoffice.BackHomeShow", compact("show"));
    }

    public function edit($id)
    {
        $edit = Backhome::find($id);
        return view("pages.backoffice.BackHomeShow", compact("edit"));
    }

    public function update($id, Request $request)
    {
        $update = Backhome::find($id);
        $update->title = $request->title;
        $update->text = $request->text;
        $update->icon = $request->icon;
        $update->save();
        return redirect("/backoffice/home");
    }
    // --------------------------------------------------------------

    public function editt($id)
    {
        $editt = HomeArticle::find($id);
        return view("pages.showfront.homeShow", compact("editt"));
    }

    public function updatee($id, Request $request)
    {
        $update = HomeArticle::find($id);
        $update->titleHome = $request->titleHome;
        $update->img = $request->img;
        $update->titleCreative = $request->titleCreative;
        $update->para1 = $request->para1;
        $update->ahref1 = $request->ahref1;
        $update->titleBest = $request->titleBest;
        $update->para2 = $request->para2;
        $update->para3 = $request->para3;
        $update->ahref2 = $request->ahref2;
        $update->save();
        return redirect("/backoffice/home");
    }
}
