<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\dapil;

class DivisiController extends Controller
{
    public function getdivisi($id)
    {
        $divisi = [
            "dprdk",
            "dprdp",
            "dprri"
        ];

        $dapil = Dapil::where('id', $id)->get();

        return view('divisi', compact(['divisi', 'dapil']));
    }
}
