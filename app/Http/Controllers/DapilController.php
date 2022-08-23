<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dapil;

class DapilController extends Controller
{
    public function getdapil()
    {
        $dapil = Dapil::where('citie_id', 177)->get();
        return view('dapil', compact('dapil'));
    }
}
