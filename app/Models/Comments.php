<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;

class Comments extends Model
{
    use HasFactory;

    public function get_user_info() {
        return $this->belongsTo(Users::class, "from_user_id" , 'id');
    } 
}
