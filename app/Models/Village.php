<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    protected $table = "indonesia_villages";

    // protected $fillable = [
    //     'id', 'code', 'district_code', 'name'
    // ];

    public function supporters()
    {
        return $this->hasMany(Supporter::class);
    }

    public function districts()
    {
        return $this->belongsTo(District::class);
    }
}
