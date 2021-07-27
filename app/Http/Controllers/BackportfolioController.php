<?php

namespace App\Http\Controllers;

use App\Models\Backportfolio;
use App\Models\PortfolioArticle;
use Illuminate\Http\Request;

class BackportfolioController extends Controller
{
    public function index()
    {
        $backportfolios = Backportfolio::all();
        $portfolioarticles = PortfolioArticle::all();
        return view('pages.backoffice.backportfolio', compact('backportfolios', 'portfolioarticles'));
    }

    public function store(Request $request)
    {
        $store = new Backportfolio;
        $store->title = $request->title;
        $store->text = $request->text;
        $store->img = $request->img;
        $store->save();
        return redirect('/backoffice/portfolio')->with('message', 'Your content was added successfully !');
    }
    public function destroy($id)
    {
        $destroy = Backportfolio::find($id);
        $destroy->delete();
        return redirect('/backoffice/portfolio');
    }
    public function show(Backportfolio $id)
    {
        $show = $id;
        // return redirect("/backoffice/{id}/show", compact("show"));
        return view("pages.backoffice.BackPortfolioShow", compact("show"));
    }

    public function edit($id)
    {
        $edit = Backportfolio::find($id);
        return view("pages.backoffice.BackPortfolioShow", compact("edit"));
    }

    public function update($id, Request $request)
    {
        $update = Backportfolio::find($id);
        $update->title = $request->title;
        $update->text = $request->text;
        $update->img = $request->img;
        $update->save();
        return redirect("/backoffice/portfolio");
    }
     // --------------------------------------------------------------

     public function editt($id)
     {
         $editt = PortfolioArticle::find($id);
         return view("pages.showfront.portfolioShow", compact("editt"));
     }
 
     public function updatee($id, Request $request)
     {
         $update = PortfolioArticle::find($id);
         $update->titlePortfolio = $request->titlePortfolio;
         $update->para1 = $request->para1;
         $update->ahref1 = $request->ahref1;
         $update->save();
         return redirect("/backoffice/portfolio");
     }
}
