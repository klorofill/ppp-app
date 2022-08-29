<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supporter extends Model
{
    use HasFactory;

    protected $table = "supporters";

    protected $fillable = [
        'id', 'nik',  'name', 'village_id'
    ];

    public function candidates()
    {
        return $this->belongsTo(Candidate::class);
    }

    public function villages()
    {
        return $this->belongsTo(Village::class);
    }
}
