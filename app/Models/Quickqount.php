<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Quickqount extends Model
{
    use HasFactory;

    public function votingplace()
    {
        return $this->belongsTo(Votingplace::class);
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
