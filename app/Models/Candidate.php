<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name'
    ];

    public function supporters()
    {
        return $this->hasMany(Supporter::class);
    }

    public function getCount(){
        return $this->supporters()->count();
    }
}
