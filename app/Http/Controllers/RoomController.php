<?php

namespace App\Http\Controllers;

use App\Models\v;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Room;
use App\Models\statusrooom;
use App\Http\Requests\StoreRooms;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Rooms = Room::all();
        $doctor = Doctor::all();

        $Status = statusrooom::all();
        return view('admin.Room.room',compact('Rooms','doctor','Status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $Doctor = Doctor::all();
        $Status = statusrooom::all();
        return view('admin.Room.create',compact('Status','Doctor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRooms $request)
    {

    try {

        $Rooms = new Room();


        $Rooms->doctor_id = $request->Doctors_id;
        $Rooms->date = $request->date;
        $Rooms->Status_id = $request->Status_id;
        $Rooms->number = $request->number;



        $Rooms->save();

        return redirect()->route('Rooms.create')->with('message',trans('sessionm.room_Added_successfly'));
    }
    catch (Exception $e) {
        return redirect()->back()->with(['error' => $e->getMessage()]);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\v  $v
     * @return \Illuminate\Http\Response
     */
    public function show(v $v)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\v  $v
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $room =Room::findOrFail($id);
        $status = statusrooom::all();
        $doctor = Doctor::all();
        return view('admin.Room.edite',compact('room','doctor','status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\v  $v
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRooms $request)
    {

    try {

        $Rooms = Room::findOrFail($request->id);




        $Rooms->number = $request->number;
        $Rooms->doctor_id = $request->Doctors_id;
        $Rooms->date = $request->date;
        $Rooms->Status_id = $request->Status_id;




        $Rooms->save();

        return redirect()->route('Rooms.index')->with('message',trans('sessionm.room_update_successfly'));;
    }
    catch (Exception $e) {
        return redirect()->back()->with(['error' => $e->getMessage()]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\v  $v
     * @return \Illuminate\Http\Response
     */
    public function destroy( $request)
    {

        Room::findOrFail($request)->delete();

    return redirect()->route('Rooms.index')->with('message',trans('sessionm.room_deleted_successfly'));
    }
}
