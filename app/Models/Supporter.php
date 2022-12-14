<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supporter extends Model
{
    use HasFactory;

    protected $table = "supporters";

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }
}
