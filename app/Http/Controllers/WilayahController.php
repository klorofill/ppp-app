<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function getkabupaten(){
        return view('kabuapten', compact('data'));
    }

    public function getprovinsi(){
        return view('provinsi');
    }
}
