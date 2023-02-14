<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\StoreRooms;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Doctor;
use App\Models\PatientStatus;
use App\Models\payment;
use App\Models\Room;
use Flasher\Laravel\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Patient = Patient::all();

        return view('admin.Patient.patient',compact('Patient'));
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
        $PatientState = PatientStatus::all();
        $payment= payment::all();
        return view('admin.Patient.create',compact('Room','Doctor','PatientState','payment'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientRequest $request)
    {

    try {




        $Patient = new Patient();

        $Patient->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
        $Patient->doctor_id = $request->Doctors_id;
        $Patient->date = $request->date;
        $Patient->status_id = $request->PatientStatus_id;
        $Patient->payment_id = $request->Payments_id;

        $Patient->room_id = $request->Room_id;



        $Patient->save();

        return redirect()->route('Patients.create')->with('message',trans('sessionm.patient_Added_successfly'));
    }
    catch (Exception $e) {
        return redirect()->back()->with(['error' => $e->getMessage()]);
    }
    }

    public function PatientOutHoppital(){

        $Patient = Patient::where('status_id', 2)
        ->get();

    return view('admin.Patient.patient-status' , compact('Patient'));

    }


    public function PatientOnHoppital(){

        $Patient = Patient::where('status_id', 1)
        ->get();

    return view('admin.Patient.patient-status' , compact('Patient'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $Patient =Patient::findOrFail($id);
        $Room = Room::all();
        $doctor = Doctor::all();
        $PatientState = PatientStatus::all();
        $payment= payment::all();
        return view('admin.Patient.edite',compact('Patient','doctor','Room','PatientState','payment'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientRequest  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update( StorePatientRequest  $request )
    {
        try {

            $Patient = Patient::findOrFail($request->id);


            $Patient->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];

            $Patient->doctor_id = $request->Doctors_id;
            $Patient->date = $request->date;
            $Patient->room_id = $request->Room_id;
            $Patient->status_id = $request->PatientStatus_id;
            $Patient->payment_id = $request->Payments_id;




            $Patient->save();

            return redirect()->route('Patients.index')->with('message',trans('sessionm.patient_update_successfly'));
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy( $request)
    {

        Patient::findOrFail($request)->delete();

    return redirect()->route('Patients.index')->with('message',trans('sessionm.patient_deleted_successfly'));
    }

}
