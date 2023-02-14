<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOperation;
use App\Models\Doctor;
use App\Models\Operation;
use App\Models\OpperationStatus;
use App\Models\Patient;
use App\Models\Room;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Operation = Operation::all();
        return view('admin.Operation.operation ' , compact('Operation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $Room = Room::all();
        $Doctor = Doctor::all();
        $Patient = Patient::all();
        $OperationStatus = OpperationStatus::all();


        return view('admin.Operation.create',compact('Room','Doctor','Patient','OperationStatus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOperation $request)
    {
        try {




            $Operation = new Operation();

            $Operation->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $Operation->doctor_id = $request->Doctors_id;
            $Operation->date = $request->date;
            $Operation->room_id = $request->Room_id;
            $Operation->dure = $request->dure;
            $Operation->patient_id = $request->Patient_id;
            $Operation->status_id = $request->Status_id;



            $Operation->save();

            return redirect()->route('Operations.create')->with('message',trans('sessionm.operation_added_successfly'));
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

        $Operation =Operation::findOrFail($id);
        $Room = Room::all();
        $doctor = Doctor::all();
        $Patient = Patient::all();
        $OperationStatus = OpperationStatus::all();


        return view('admin.Operation.edite',compact('Patient','doctor','Room','OperationStatus','Operation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(  $request)
    {
        try {

            $Operation = Operation::findOrFail($request->id);


            $Operation->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];

            $Operation->doctor_id = $request->Doctors_id;
            $Operation->date = $request->date;
            $Operation->room_id = $request->Room_id;
            $Operation->dure = $request->dure;
            $Operation->patient_id = $request->Patient_id;
            $Operation->status_id = $request->Status_id;




            $Operation->save();

            return redirect()->route('Operations.index')->with('message',trans('sessionm.operation_update_successfly'));;
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
        Patient::findOrFail($request)->delete();

    return redirect()->route('Operations.index')->with('message',trans('sessionm.operation_deleted_successfly'));
    }
}
