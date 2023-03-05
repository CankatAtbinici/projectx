<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users as User;
use Exception;

class NewUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        try {
            $user = User::all();
            return response()->json([
                'status' => 'succses',
                'code' => 200,
                'message' => "Succsess",
                'data' => $user,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'code' => 500,
                'message' =>  $e->getMessage(),
                'data' => null,
            ]);
        }
    }


    public function get_user ($id) 
    {
        $users = User::with("get_country_of_user" , "get_city_of_user") -> get();
        return $users;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $request->validate([ 
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'birthday' => 'required|date',
            'country' => 'required|integer|exists:countries,id',
            'city' => 'required|integer|exists:cities,id',
            "username" => 'required|string|max:255',
            'gender' => 'required|integer|exists:genders,id',
            /*
            'web_site' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'linkedln' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'pinterest' => 'nullable|string|max:255',
            'db_name' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'status' => 'required|integer|in:0,1',
               'sub_city_id' => 'required|integer|exists:sub_cities,id',
            */
        ]);
    
        try{
            $user = new User();
            $user->name = $request->name;
            $user->surname = $request->lastname;
            $user->birthday = $request->birthday;
            $user->gender_id = $request->gender;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->city_id = $request->city;
            $user->username = $request->username;
            $user->country_id = $request->country;
            $user->password = bcrypt($request->password); 
            $user->status ='1';
            /*
            $user->web_site = $request->web_site;
            $user->facebook = $request->facebook;
            $user->instagram = $request->instagram;
            $user->twitter = $request->twitter;
            $user->linkedln = $request->linkedln;
            $user->youtube = $request->youtube;
            $user->pinterest = $request->pinterest;
            $user->db_name = $request->db_name;
            $user->password = $request->password;
            $user->status = $request->status;
                        $user->sub_city_id = $request->sub_city_id;
            */

            $user->save();
            return response()->json([
                 'status' => 'success',
                 'code' => 200,
                 'message' => "User saved successfully",
                 'data' => $user,
        ]);
        }catch(\Exception $e){
            return response()->json([
                'status' => 'error',
                'code' => 500,
                'message' => $e,
                'data' => null,
       ]);
        }
    }


    public function update(Request $request, $id)
    {
        $request->validate([
          //  'id'  => 'required|integer|exist:users' 
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|integer|exists:genders,id',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255',
            'city_id' => 'required|integer|exists:cities,id',
            'sub_city_id' => 'required|integer|exists:sub_cities,id',
            'street' => 'required|string|max:255',
            'country_id' => 'required|integer|exists:countries,id',
            'web_site' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'linkedln' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'pinterest' => 'nullable|string|max:255',
            'db_name' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'status' => 'required|integer|in:0,1',
        ]);
        try {
            $user = User::findOrFail($request->id);
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->birthday = $request->birthday;
            $user->gender_id = $request->gender_id;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->city_id = $request->city_id;
            $user->sub_city_is = $request->sub_city_id;
            $user->street = $request->street;
            $user->country_id = $request->country_id;
            $user->web_site = $request->web_site;
            $user->facebook = $request->facebook;
            $user->instagram = $request->instagram;
            $user->twitter = $request->twitter;
            $user->linkedln = $request->linkedln;
            $user->youtube = $request->youtube;
            $user->pinterest = $request->pinterest;
            $user->db_name = $request->db_name;
            $user->password = $request->password;
            $user->status = $request->status;

            $user->save();
            return response()->json([
                'status' => 'succses',
                'code' => 200,
                'message' => "user saved succesfully",
                'data' => $user,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'code' => 500,
                'message' =>  $e->getMessage(),
                'data' => null,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $user = User::destroy($id);
            return response()->json([
                'status' => 'succses',
                'code' => 200,
                'message' => "user deleted succesfully",
                'data' => null,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'code' => 500,
                'message' => "Could not delete user",
                'data' => null,
            ]);
        }
    }
}
