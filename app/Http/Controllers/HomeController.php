<?php
namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;



class HomeController extends Controller
{




    // home page pour test user
    public function index(){

        $doctors = Doctor::all();
        return view('home.userpage' ,compact('doctors'));

    }

    public function contact(){

        return view('home.contact');

    }

    public function contactUs(Request $request){

        $details =[

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg,
        ];
        Mail::to('yousseftam100@gmail.com')->send( new ContactMail($details));
        return back()->with('message','Your Message has been sent successfully!');




    }






    // auth with multi login




    public function TermsAndPolicy(){


        return view('terms_policy');
    }
}
