<?php

namespace App\Exports;

use App\Models\Supporter;
use Maatwebsite\Excel\Concerns\FromCollection;

class SupporterExport implements FromCollection
{
    protected $id;

    function __construct($id) {
            $this->id = $id;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Supporter::where('candidate_id', $this->id)->get();
    }
}
