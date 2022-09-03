<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votingplace extends Model
{
    use HasFactory;

    public function quickqount()
    {
        return $this->hasMany(Quickqount::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }
}
