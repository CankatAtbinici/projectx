<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users as User;

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



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $user = new User();
            $user->id = $request->id;
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->birthday = $request->birthday;
            $user->gender_id = $request->gender_id;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->city_id = $request->city_id;
            $user->sub_city_id = $request->sub_city_id;
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        try {
            $user = User::findOrFail($request->id);
            $user->id = $request->id;
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
