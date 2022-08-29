<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dapil;

class DapilController extends Controller
{
    public function getdapil(Request $request)
    {
        $kabupaten  = \Indonesia::findCity($request->kota);
        $dapil = Dapil::where('citie_id', $request->kota)->get();
        return view('dapil', compact('dapil','kabupaten'));
    }
}
