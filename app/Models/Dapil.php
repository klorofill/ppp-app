<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dapil extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'code', 'citie_id ', 'kecamatan'
    ];

    public function candidate()
    {
        return $this->hasMany(Candidate::class);
    }

    public function citie()
    {
        return $this->belongsTo(CitiesSeeder::class);
    }

    


}
