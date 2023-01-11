<?php

namespace App\Http\Controllers;

use App\Models\MeetingPlaning;
use Illuminate\Http\Request;

class MeetingPlaningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $meet_plan = new MeetingPlaning();
        try {
            $meet_plan->id = $request->id;
            $meet_plan->client_id = $request->client_id;
            $meet_plan->exp_id = $request->exp_id;
            $meet_plan->request_time = $request->request_time;
            $meet_plan->reservation_time = $request->reservation_time;
            $meet_plan->status = $request->status;
            $meet_plan->save();
        } catch (\Exception $e) {
            return response() -> json([
                'status' => 'error',
                'code' => 301,
                'message' => $e->getMessage(),
                'data' => null,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MeetingPlaning  $meetingPlaning
     * @return \Illuminate\Http\Response
     */
    public function show(MeetingPlaning $meetingPlaning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MeetingPlaning  $meetingPlaning
     * @return \Illuminate\Http\Response
     */
    public function edit(MeetingPlaning $meetingPlaning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MeetingPlaning  $meetingPlaning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MeetingPlaning $meetingPlaning)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MeetingPlaning  $meetingPlaning
     * @return \Illuminate\Http\Response
     */
    public function destroy(MeetingPlaning $meetingPlaning)
    {
        //
    }
}
