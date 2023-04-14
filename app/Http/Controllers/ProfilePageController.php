<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\UserLastSeen;
use App\Models\Users;
use App\Models\MeetingTime;
use App\Models\Comments;
use App\Models\ExperiencedUsers;
use App\Models\ExperiencedUserValidTime;
use stdClass;

class ProfilePageController extends Controller
{
    public function getUserProfilePageData()
    {
        $user = JWTAuth::parseToken()->authenticate();
        $userLastSeen = UserLastSeen::where('user_id', $user->id)->select('status', 'last_seen_at')->first();
        $user_valid_times = ExperiencedUserValidTime::where('user_id' , $user->id)->select('vars')->first();
        $userMeetingCount = false;
        $totalMeetingTime = false;
        $rateCount = false;

        $userTotalMeetingTime = MeetingTime::where('user_id', $user->id)->select('meet_time')->get();
        if ($userTotalMeetingTime != null) {
            $userMeetingCount = count((array) $userTotalMeetingTime);
            $totalMeetingTime = $userTotalMeetingTime->sum('meet_time');
        }



        $user_rate = Users::where('id', $user->id)->first();
        $comments = Comments::with(["get_user_info" => function ($userData) {
            $userData = $userData->select('id', 'username');
        }])->where('to_user_id', $user->id)->get();


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
        $user->allowed_times = $user_valid_times;
        return response()->json($user);
    }

    public function registerExperienced(Request $request)
    {

        $experienced_user_valid_times = $request->times ?? [];
        $experienced_user_info = $request->info;

        $tc_id_number  = $experienced_user_info['tc_id_number'];
        $user_id    = $experienced_user_info['user_id'];
        $exp_desription =     $experienced_user_info['exp_description'];
        $address_info   =     $experienced_user_info['address_info'];
        $experience_child =   $experienced_user_info['experience_child'];
        $experience_parent =  $experienced_user_info['experience_parent'];
        $experienced_phone_number   =  $experienced_user_info['experienced_phone_number'];
        $graduated_info   =            $experienced_user_info['graduated_info'];
        $universty   =                 $experienced_user_info['universty'];
        $universty_department   =      $experienced_user_info['universty_department'];

        try {
            $experinced_user = new ExperiencedUsers();
            $experinced_user->id_number =   $tc_id_number;
            $experinced_user->user_id =   $user_id;
            $experinced_user->phone_number =   $experienced_phone_number;
            $experinced_user->address =   $address_info;
            $experinced_user->education_level =    $graduated_info;
            $experinced_user->universty =    $universty;
            $experinced_user->department =    $universty_department;
            $experinced_user->experienced_parent_category =    $experience_parent;
            $experinced_user->experienced_child_category =    $experience_child;
            $experinced_user->description =    $exp_desription;
            $experinced_user->description =    $exp_desription;

            try {
                $user =  Users::findOrFail($user_id);
                $user->status = 1;
                $user ->save();
            } catch (\Exception $e) {
                return response()->json([
                    'code' => '404',
                    'message' => $e
                ]);
            }
            
            try {
                $user_valid_time = ExperiencedUserValidTime::where('user_id', $user_id)->first();
                if ($user_valid_time) {
                    $user_valid_time->vars = $experienced_user_valid_times;
                    $user_valid_time->save();
                    return response()->json([
                        'data' => $user_valid_time
                    ]);
                } else {
                    $user_valid_time = new ExperiencedUserValidTime();
                    $user_valid_time->user_id = $user_id;
                    $user_valid_time->vars = json_encode($experienced_user_valid_times);
                    $user_valid_time->save();
                }
            } catch (\Exception $e) {
                return response() ->json([
                    'code' => '500',
                    'message' => 'user valid time not found'
                ]);
            }
            $experinced_user->save();
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
    }

    public function getProfileVisitData(Request $request)
    {
        
        $visiting_user_id = $request->user;
        $user = Users::where('id' , $visiting_user_id)->first();
        $userLastSeen = UserLastSeen::where('user_id', $visiting_user_id)->select('status', 'last_seen_at')->first();
        $user_valid_times = ExperiencedUserValidTime::where('user_id' ,$visiting_user_id)->select('vars')->first();
        $userMeetingCount = false;
        $totalMeetingTime = false;
        $rateCount = false;

        $userTotalMeetingTime = MeetingTime::where('user_id',$visiting_user_id)->select('meet_time')->get();
        if ($userTotalMeetingTime != null) {
            $userMeetingCount = count((array) $userTotalMeetingTime);
            $totalMeetingTime = $userTotalMeetingTime->sum('meet_time');
        }



        $user_rate = Users::where('id', $visiting_user_id)->first();
        $comments = Comments::with(["get_user_info" => function ($userData) {
            $userData = $userData->select('id', 'username');
        }])->where('to_user_id', $visiting_user_id)->get();


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
        $user->allowed_times = $user_valid_times;
        return response()->json($user);
    }
}
