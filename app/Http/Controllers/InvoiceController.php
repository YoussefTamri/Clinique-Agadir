<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Doctor;
use App\Models\Invoice;
use App\Models\Patient;
use App\Models\payment;
use App\Models\Operation;
use Illuminate\Http\Request;

use App\Http\Requests\StoreInvoice;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Invoice = Invoice::all();
        return view('admin.Invoice.invoices', compact('Invoice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Patient = Patient::all();
        $Doctor = Doctor::all();
        $Operation = Operation::all();
        $Payment = payment::all();
        return view('admin.Invoice.create', compact('Patient','Doctor','Operation','Payment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoice $request)
    {
        try {




            $Invoice = new Invoice();


            $Invoice->doctor_id = $request->Doctors_id;
            $Invoice->date = $request->date;
            $Invoice->price = $request->price;

            $Invoice->patient_id = $request->Patient_id;
            $Invoice->payment_id = $request->payment_id;
            $Invoice->operation_id = $request->Operations_id;



            $Invoice->save();

            return redirect()->route('Invoices.create')->with('message',trans('sessionm.invoice_Added_successfly'));
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
        $Invoice =Invoice::findOrFail($id);

        return view('admin.Pinvoice.pinvoice', compact('Invoice'));
    }


    public function InvoiceNotPaid(){



        $Invoice = Invoice::where('payment_id',2 )
        ->get();

    return view('admin.Invoice.invoice-payment' , compact('Invoice'));

    }



    public function InvoicePaid(){

        $Invoice = Invoice::where('payment_id', 1)
        ->get();


    return  view('admin.Invoice.invoice-payment' , compact('Invoice'));

    }






    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Invoice =Invoice::findOrFail($id);
         $Patient = Patient::all();
         $Doctor = Doctor::all();
         $Operation = Operation::all();
         $Payment = payment::all();
        return view('admin.invoice.edite',compact('Invoice','Patient','Doctor','Operation','Payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request)
    {
        try {




            $Invoice = Invoice::findOrFail($request->id);


            $Invoice->doctor_id = $request->Doctors_id;
            $Invoice->date = $request->date;
            $Invoice->price = $request->price;

            $Invoice->patient_id = $request->Patient_id;
            $Invoice->payment_id = $request->payment_id;
            $Invoice->operation_id = $request->Operations_id;



            $Invoice->save();

            return redirect()->route('Invoices.index')->with('message',trans('sessionm.invoice_update_successfly'));
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
         Invoice::findOrFail($request)->delete();

    return redirect()->route('Invoices.index')->with('message',trans('sessionm.invoice_deleted_successfly'));
    }
}
