<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Candidate;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = Candidate::get();
        return view('candidate.list', compact('candidates'));
    }


}
