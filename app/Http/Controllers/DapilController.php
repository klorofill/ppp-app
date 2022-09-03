<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dapil;
use App\Models\Regency;

class DapilController extends Controller
{
    public function getdapil(Request $request)
    {
        // echo $request->kota;
        $kabupaten  = Regency::find($request->kota);
        $dapil = Dapil::where('regency_id', $request->kota)->get();
        return view('dapil', compact('dapil','kabupaten'));
    }
}
