<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class HomePageController extends Controller
{
    public function getAllUserData() {
        $user_home_page_data = Users::with(['rates' => function ($query) {
            $query->selectRaw('user_id, AVG(point) as average_rate');
            $query->groupBy('user_id');
        }])->select('id' , 'name' , 'surname' )->get();
        return $user_home_page_data;
    }
}
