<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class Cities extends Model
{
    // use HasFactory;
    protected $table = 'cities';
    protected $fillable = ['country_id', 'name', 'code'];
    protected $guarded = [];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
