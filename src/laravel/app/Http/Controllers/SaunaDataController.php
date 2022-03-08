<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaunaDataController extends Controller
{
    //
    public function showindex()
    {
        return view('index/index');
    }

    public function showdetail ()
    {
        return view('index/saunadata');
    }
}
