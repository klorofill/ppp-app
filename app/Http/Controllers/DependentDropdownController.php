<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Province;

use App\Models\Regency;

use App\Models\District;

use App\Models\Village;

use App\Models\Dapil;

use App\Models\Candidate;

use App\Models\Votingplace;



class DependentDropdownController extends Controller
{
    public function provinces()
    {
        return Province::all();
    }

    public function regencys(Request $request)
    {
        return Regency::where('province_id' , $request->id)->pluck('name', 'id');
    }

    public function districts(Request $request)
    {
        return District::where('regency_id' , $request->id)->pluck('name', 'id');
    }

    public function villages(Request $request)
    {
        return Village::where('district_id' , $request->id)->pluck('name', 'id');
    }

    public function dapils(Request $request)
    {
        return Dapil::where('regency_id' , $request->id)->pluck('code', 'id');
    }

    public function candidates(Request $request)
    {
        return Candidate::where('dapil_id' , $request->id)->pluck('name', 'id', 'divis');
    }

    public function votingplaces(Request $request)
    {
        return Votingplace::where('village_id' , $request->id)->pluck('code', 'id');
    }
}
