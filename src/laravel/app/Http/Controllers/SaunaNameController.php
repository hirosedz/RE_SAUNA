<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SaunaName;

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

    public function create ()
    {
        $this->validate($request, SaunaName::$rules);

        $saunaname = New SaunaName();

        return redirect("saunaexperience");
    }
}
