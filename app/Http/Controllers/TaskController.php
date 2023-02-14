<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTasks;
use App\Models\Doctor;
use App\Models\Status;
use App\Models\Task;
use Illuminate\Http\Request;



class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */






    public function index()
    {


        $Tasks = Task::all();
        return view('admin.Task.show',compact('Tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Doctor = Doctor::all();
        $Status = Status::all();
        return view('admin.Task.task',compact('Status','Doctor'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTasks $request)
    {


    try {




        $Tasks = new Task();

        $Tasks->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
        $Tasks->doctor_id = $request->Doctors_id;
        $Tasks->date = $request->date;
        $Tasks->Status_id = $request->Status_id;
        $Tasks->details = $request->details;



        $Tasks->save();

        return redirect()->route('Tasks.create')->with('message',trans('sessionm.task_added_successfly'));
    }
    catch (Exception $e) {
        return redirect()->back()->with(['error' => $e->getMessage()]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task =Task::findOrFail($id);
        $status = Status::all();
        $doctor = Doctor::all();
        return view('admin.Task.edite',compact('task','doctor','status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    try {

        $Tasks = Task::findOrFail($request->id);


        $Tasks->Name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];

        $Tasks->doctor_id = $request->Doctors_id;
        $Tasks->date = $request->date;
        $Tasks->Status_id = $request->Status_id;


        $Tasks->details = $request->details;

        $Tasks->save();

        return redirect()->route('Tasks.index')->with('message',trans('sessionm.task_update_successfly'));;
    }
    catch (Exception $e) {
        return redirect()->back()->with(['error' => $e->getMessage()]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($request)
    {
        Task::findOrFail($request)->delete();

    return redirect()->route('Tasks.index')->with('message',trans('sessionm.task_deleted_successfly'));
    }
}
