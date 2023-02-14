<?php


namespace App\Repository;

use http\Env\Request;
interface DoctorsRepositoryInterface {


   public function  getAllDoctors();
//    public function  getAllGenders();
   public function  StoreDoctors($request);
   public function Getcategory();
   public function GetGender();
   public function DeleteDoctors($request);
   public function editDoctors($id);
   public function UpdateDoctors($request);


}
