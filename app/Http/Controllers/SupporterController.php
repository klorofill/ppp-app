<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Supporter;

use App\Models\Candidate;

use Illuminate\Validation\Rule;

class SupporterController extends Controller
{
    public function add(Request $request, $id)
    {
        $candidate = Candidate::find($id);
        return view('addpilihan', compact('candidate'));
    }

    public function addsupporter(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'candidate_id' => 'required',
            'nik' => 'required|unique:supporters,nik|min:16',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'domisili' => 'required'
        ]);

        
        
        print_r($request->name);
        $supporter = new Supporter;
        $supporter->name = $request->name;
        $supporter->candidate_id = $request->candidate_id;
        $supporter->nik = $request->nik;
        $supporter->province_id = $request->provinsi;
        $supporter->citie_id  = $request->kota;
        $supporter->district_id  = $request->kecamatan;
        $supporter->village_id  = $request->desa;
        $supporter->domisili = $request->domisili;
        $supporter->save();

        return redirect()->route('companies.index')
        ->with('success','Company has been created successfully.');
    }
}
