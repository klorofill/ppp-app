<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Candidate;



class CandidateController extends Controller
{
    public function getcandidate($id, $divisi)
    {
        $candidates = Candidate::where('dapil_id', '=', $id)
                                ->where('divisi', '=', $divisi)
                                ->get();
        return view('candidate', compact('candidates'));
    }

    public function list()
    {
        $candidates = Candidate::get();
        return view('admin.index', compact('candidates'));
    }

    public function addcandidate()
    {
        return view('admin.addcandidate');
    }


}
