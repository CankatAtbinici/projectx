<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;

class Country extends Model
{
    // use HasFactory;
    protected $table = 'countries';
    protected $fillable = ['region_id', 'name', 'code'];
    protected $guarded = [];

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
}
