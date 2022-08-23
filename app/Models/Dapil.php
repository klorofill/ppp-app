<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dapil extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function divisi()
    {
        return $this->hasMany(Supporter::class);
    }

    public function citie()
    {
        return $this->belongsTo(CitiesSeeder::class);
    }

    


}
