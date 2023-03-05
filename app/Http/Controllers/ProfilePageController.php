<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\UserLastSeen;
use App\Models\Users;
use App\Models\MeetingTime;
use App\Models\Comments;
use App\Models\ExperiencedUsers;


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

   public function registerExperienced(Request $request) {

    $id_number = $request->id_number;
    $user_id = $request->user_id;
    $exp_desription = $request ->exp_description;
    $address_info = $request->address_info;
    $experience_child = $request->experience_child;
    $experience_parent = $request->experience_parent;
    $experienced_phone_number = $request->experienced_phone_number;
    $graduated_info = $request ->graduated_info;
    $universty = $request->universty;
    $universty_department = $request->universty_department;



    try {
        $user=  Users::findOrFail($user_id);
        $user->status = 1;
        $experinced_user = new ExperiencedUsers();
        $experinced_user -> id_number =   $id_number;
        $experinced_user -> user_id =   $user_id;
        $experinced_user -> phone_number =   $experienced_phone_number;
        $experinced_user -> address =   $address_info;
        $experinced_user -> education_level =    $graduated_info;
        $experinced_user -> universty =    $universty;
        $experinced_user -> department =    $universty_department;
        $experinced_user -> experienced_parent_category =    $experience_parent;
        $experinced_user -> experienced_child_category =    $experience_child;
        $experinced_user -> description =    $exp_desription;
        $experinced_user -> description =    $exp_desription;
        $experinced_user->save();
        $user->save();
        return response()->json([
            'result' => true,
            'code' => 200,
   ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'code' => 500,
            'message' => $e,
            'data' => null,
   ]);
    }

    return response()->json([
        'data' => $id_number,
        'message' => 'heheheheh'
    ]);
   }
}
