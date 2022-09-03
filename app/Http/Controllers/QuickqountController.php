<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quickqount;

use App\Models\Dapil;

use App\Models\Votingplace;

use App\Models\Candidate;

class QuickqountController extends Controller
{
    public function quickqountform(Request $request)
    {
        $dapil_id       = $request->dapils;
        $votingplace_id = $request->tps;
        $caleg          = $request->caleg;
        $kondisi        = [
                            'divisi'    => $caleg, 
                            'dapil_id'  => $dapil_id
                        ];
        $votingplace    = Votingplace::find($request->tps);
        $dapil          = Votingplace::find($dapil_id);
        $candidates     = Candidate::where($kondisi)
                        ->get();

        return view('quickqountcandidate', compact('votingplace','dapil', 'candidates'));
    }


    public function quickqount(Request $request)
    {
        $votingplace    = $request->votingplace;
        $candidate      = $request->candidate;
        $suara          = $request->suara;

        for($count = 0; $count < count($votingplace); $count++)
        {
            $data = [   
                'suara'            => $suara[$count],
                'votingplace_id'   => $votingplace[$count],
                'candidate_id'     => $candidate[$count],
            ];
            Quickqount::insert($data);
        }
        
        // Supporter::insert($data);
    }

    public function rekapquick(Request $request)
    {   
        $candidates = Candidate::find($request->candidate);
        $quickqounts = Quickqount::where('candidate_id', $request->candidate)->paginate(10);
        return view('admin.rekapquickqount-table', compact('candidates','quickqounts'));
    }
}
