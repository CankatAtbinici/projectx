<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\UserLastSeen;
use App\Models\Users;
use App\Models\MeetingTime;
use App\Models\Comments;

class ProfilePageController extends Controller
{
   public function getUserProfilePageData(){
    $user = JWTAuth::parseToken()->authenticate();
    $userLastSeen = UserLastSeen::where('user_id', $user->id)->select('status' , 'last_seen_at')->first();

    $userMeetingCount = false;
    $totalMeetingTime = false;
    $rateCount=false;

    $userTotalMeetingTime = MeetingTime::where('user_id',$user->id)->select('meet_time')->get();
    if($userTotalMeetingTime != null){
        $userMeetingCount = count((array) $userTotalMeetingTime);
        $totalMeetingTime = $userTotalMeetingTime->sum('meet_time');
    }



    $user_rate = Users::where('id', $user->id)->first();
    $comments = Comments::with(["get_user_info" => function($userData){
    $userData = $userData->select('id' , 'username');
    }] )->where('to_user_id' , $user->id)->get();


    $user_rate->load(['rates' => function ($query) use (&$rateCount) {
        $query->selectRaw('user_id, AVG(point) as average_rate, COUNT(point) as points_count');
        $query->groupBy('user_id');
        $rateCount = $query->get()->sum('points_count');
    }]);
    $rates = $user_rate->rates;



    $user->user_last_seen = $userLastSeen;
    $user->user_rate = $rates; 
    $user->total_meeting_time = $totalMeetingTime;
    $user->comments = $comments;
    $user->rate_count = $rateCount;
    $user->user_meeting_count = $userMeetingCount;

    return response()->json($user);
   } 

   public function registerExperienced() {
    
   }
}
