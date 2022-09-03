<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Candidate;

use App\Models\Supporter;

use DataTables;

use App\Exports\SupporterExport;

use Maatwebsite\Excel\Facades\Excel;

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
        return view('admin.rekapsupporter', compact('candidates'));
    }

    public function addcandidate()
    {
        return view('admin.addcandidate');
    }

    public function rekapsupporter(Request $request)
    {   
        $candidates = Candidate::find($request->candidate);
        $supporters = Supporter::where('candidate_id', $request->candidate)->paginate(10);
        return view('admin.rekapsupporter-table', compact('supporters','candidates'));
    }

    public function rekapsupporterexcel(Request $request)

    {   $candidates = Candidate::find($request->id);
        return Excel::download(new SupporterExport($request->id), $candidates->name.'.xlsx');
    }

    // public function export(Request $request)
    // {
    //     return Excel::download(new SupporterExport($request->id), 'MttRegistrations.xlsx');
    // }


}
