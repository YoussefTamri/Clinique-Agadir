<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Invoice;
use App\Models\Patient;

use App\Models\category;
use App\Models\Operation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function dashboard(){



        $usertype = Auth::user()->usertype;

        $doctors = Doctor::all();
        $users = User::all();
        $operation = Operation::all();



        $patient = Patient::where('status_id', 1)
            ->get();

        $Invoice_not_paid = Invoice::where('payment_id', 2)
            ->get();


        $invoice = Invoice::orderBy('price','asc')->get();





            return view('dashboard',compact('doctors','users','patient','operation','invoice','Invoice_not_paid'));
    }


    // view of category
    public function category(){


        $data = category::all();

        return view('admin.category',compact('data'));
    }






    // function to delete category

    public function delete_category($id){

        $data= category::find($id);
        $data->delete();
        return redirect()->back()->with('message','category deleted successfly');

    }

    // function to add category

    public function add_category(Request $request){


        $data = new category;
        $data -> category_name = $request->category;
        $data->save();

        return redirect()->back()->with('message','category added successfully');

    }
}
