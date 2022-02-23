<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SaunaName;

class SaunaNameController extends Controller
{
    //
    public function show ()
    {
        return view('experience/saunaname');
    }
    public function shownew()
    {
        return view('experience/saunaname_new');
    }

    public function create (Request $request)
    {
        $this->validate($request, SaunaName::$rules);

        $saunaname = New SaunaName;
        $saunaname->saunaname = $request->saunaname;
        $saunaname->save();

        return redirect("saunaexperience");
    }
}
