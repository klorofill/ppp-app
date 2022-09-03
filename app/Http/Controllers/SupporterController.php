<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Supporter;

use App\Models\Candidate;

use Illuminate\Validation\Rule;

use DB;

use PDF;

class SupporterController extends Controller
{
    public function supportterform(Request $request, $id)
    {
        $candidate = Candidate::find($id);
        return view('supporter', compact('candidate'));
    }

    public function addsupporter(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'name' => 'required',
            'nohp' => 'required',
            'candidate_id' => 'required',
            'nik' => 'required|min:16|max:16',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'domisili' => 'required',

        ]);

        $whereData = [
            ['nik', $request->nik],
            ['candidate_id', $request->candidate_id]
        ];

        $data = [
          $request->nik,
          $request->name,
          $request->candidate_id
        ];

        $count = DB::table('supporters')->where($whereData)->count();

        if($count > 0)
        {
            return \Redirect::back()->with('error_code', 0);
        }
        else
        {
          $supporter = new Supporter;
          $supporter->name = $request->name;
          $supporter->candidate_id = $request->candidate_id;
          $supporter->nik = $request->nik;
          $supporter->nohp = $request->nohp;
          $supporter->village_id  = $request->desa;
          $supporter->domisili = $request->domisili;
          $supporter->save();


          return view("bukti")->with('store', $data);
        }

        
    }

    public function cetak_pdf($idcandidate, $nik)
    {
      $data = Supporter::where('nik', $nik)->get();
      $pdf = PDF::loadview('bukti_pdf', ['supporter' => $data]);

      return $pdf->download($nik.'.pdf');
    }
}
