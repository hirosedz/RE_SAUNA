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

        $tmp = SaunaName::where('saunaname',$request->saunaname)
            ->where('user_id',$request->user_id)
            ->get();
            echo($tmp);

        if(!is_null($tmp)){
            return redirect('saunaname/new')
            ->withErrors('サウナ名が重複しています')
            ->withInput($request->data);
            }

        $saunaname = New SaunaName;
        $saunaname->saunaname = $request->saunaname;
        $saunaname->user_id = $request->user_id;
        $saunaname->save();

        return redirect("experience/saunaname");
    }
}
