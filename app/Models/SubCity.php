<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cities;

class SubCity extends Model
{
    use HasFactory;
    public function city()
    {
        $allRates = $this->belongsTo(Cities::class, 'city_id', 'id'); 
        return $allRates ;
    }   
}
