<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'divisi', 'dapil_id'
    ];

    public function supporters()
    {
        return $this->hasMany(Supporter::class);
    }

    public function getCount(){
        return $this->supporters()->count();
    }

    public function dapils()
    {
        return $this->belongsTo(Dapil::class);
    }
}
