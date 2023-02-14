<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreDoctors;
use App\Repository\DoctorsRepositoryInterface;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



     protected $Doctors;
     public function __construct(DoctorsRepositoryInterface $Doctors)
     {
         $this->Doctors = $Doctors;
     }

    public function index()
    {



        $doctors = $this->Doctors->getAllDoctors();

        return view('admin.Doctors.allDoctors',compact('doctors'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $Category = $this->Doctors->Getcategory();
        $Gender = $this->Doctors->GetGender();

        return view('admin.Doctors.Doctors',compact('Category','Gender'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctors $request)
    {
      return  $this->Doctors->StoreDoctors($request);
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
        $doctor = $this->Doctors->editDoctors($id);
        $Categoys = $this->Doctors->Getcategory();
        $genders = $this->Doctors->GetGender();
        return view('admin.Doctors.editDoctors',compact('doctor','Categoys','genders'));
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
         return $this->Doctors->UpdateDoctors($request);
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        return $this->Doctors->DeleteDoctors($request);
    }
}
