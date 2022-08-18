<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Supporter;

use App\Models\Candidate;

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
            'nik' => 'required',
            'provinsi' => 'required',
            'candidate_id' => 'required',
            'address' => 'required',
        ]);

        print_r($request);
        // $supporter = new Supporter;
        // $company->name = $request->name;
        // $company->email = $request->email;
        // $company->address = $request->address;
        // $company->save();

        // return redirect()->route('companies.index')
        // ->with('success','Company has been created successfully.');
    }
}
