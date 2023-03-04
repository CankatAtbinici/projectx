<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\UserLastSeen;
use Carbon\Carbon;

class LoginController extends Controller
{
    public function isLogin(Request $request) {
        $credentials = $request->only(['email', 'password']);
        $token = JWTAuth::attempt($credentials);
        
        if ($token) {
            return response()->json(compact('token'));
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function update_last_visit (Request $request) 
    {
        if( ($request->visitor == null) || (!is_numeric($request->visitor) ))  {
           return false;
        }
        $id = $request->visitor;
        $date = Carbon::now(); 
        $lastSeen = new UserLastSeen();
        $lastSeen = $lastSeen::where('user_id', $id)->first();

        if($request->value != false){
            if (!$lastSeen) {
                $lastSeen = new UserLastSeen();
                $lastSeen->user_id = $id;
                $lastSeen->last_seen_at = Carbon::now();
                $lastSeen->status = "online";
                
                $lastSeen->save();
            } else {
                $lastSeen->last_seen_at = Carbon::now();
                $lastSeen->status = "online";
                $lastSeen->save();
            }

        }else{
                try {
                    $lastSeen->last_seen_at = Carbon::now();
                    $lastSeen->status = "offline";
                    $lastSeen->save();
                } catch (\Exception $e) {
                    return response()->json(
                     [   "code" => "500",
                        "mesage" => $e->getMessage()
                        ]
                    );
                }


        }
   


    }
}
