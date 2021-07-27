<?php

namespace App\Http\Controllers;

use App\Models\ContactArticle;
use Illuminate\Http\Request;

class BackcontactController extends Controller
{
    public function index()
    {
        $contactarticles = ContactArticle::all();
        return view('pages.backoffice.backcontact', compact('contactarticles'));
    }
    // --------------------------------------------------------------

    public function editt($id)
    {
        $editt = ContactArticle::find($id);
        return view("pages.showfront.contactShow", compact("editt"));
    }

    public function updatee($id, Request $request)
    {
        $update = ContactArticle::find($id);
        $update->titleContact = $request->titleContact;
        $update->titleTouch = $request->titleTouch;
        $update->para1 = $request->para1;
        $update->namePara = $request->namePara;
        $update->phoneNumber = $request->phoneNumber;
        $update->faxNumber = $request->faxNumber;
        $update->email = $request->email;
        $update->save();
        return redirect("/backoffice/contact");
    }
}
