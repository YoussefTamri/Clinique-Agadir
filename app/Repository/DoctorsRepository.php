<?php


namespace App\Repository;
use App\Models\Category;
use App\Models\Doctor;
use App\Models\Gender;
use Illuminate\Support\Facades\Hash;
use App\Trait\DoctorTraits;

class DoctorsRepository implements DoctorsRepositoryInterface{


    use DoctorTraits;


  public function getAllDoctors()
  {





        return Doctor::all();


  }


  public function GetGender(){
    return Gender::all();
 }

 public function Getcategory(){
    return Category::all();
}



  public function storeDoctors($request){



    try {


    $fileName = $this -> saveImage($request->photo , 'images/doctors');
            $Doctors = new Doctor();
            $Doctors->Email = $request->Email;
            $Doctors->Password =  Hash::make($request->Password);
            $Doctors->Name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $Doctors->category_id = $request->category_id;
            $Doctors->Gender_id = $request->Gender_id;
            $Doctors->from_date = $request->From_date;
            $Doctors->Address = $request->Address;
            $Doctors->phone = $request->phone;
            $Doctors->image = $fileName;
            $Doctors->Description = $request->Description;


            $Doctors->save();

            return redirect()->route('Doctors.create')->with('message',trans('sessionm.doctor_added_successfly'));
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }



//   public function getAllGenders()
//   {

//   }


public function DeleteDoctors($request)
{
    Doctor::findOrFail($request->id)->delete();

    return redirect()->route('Doctors.index')->with('message',trans('sessionm.doctor_deleted_successfly'));
}


public function editDoctors($id)
{
    return Doctor::findOrFail($id);
}



public function UpdateDoctors($request)
{
    try {

        $fileName = $this -> saveImage($request->photo , 'images/doctors');
        $Doctors = Doctor::findOrFail($request->id);
        $Doctors->email = $request->email;
        $Doctors->password =  Hash::make($request->password);
        $Doctors->Name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
        $Doctors->Category_id = $request->category_id;
        $Doctors->Gender_id = $request->Gender_id;
        $Doctors->from_date = $request->form_date;
        $Doctors->Address = $request->Address;
        $Doctors->image = $fileName;
        $Doctors->Description = $request->description;
        $Doctors->Phone = $request->phone;

        $Doctors->save();

        return redirect()->route('Doctors.index')->with('message',trans('sessionm.doctor_updated_successfly'));;
    }
    catch (Exception $e) {
        return redirect()->back()->with(['error' => $e->getMessage()]);
    }
}


}

