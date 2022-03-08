<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToppageController extends Controller
{
    //
    public function show ()
    {
        return view('toppage/top');
    }
}
