<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;



    public function operations()
    {
        return $this->belongsTo('App\Models\Operation', 'operation_id');
    }

    public function payment()
    {
        return $this->belongsTo('App\Models\payment', 'payment_id');
    }

    public function patients()
    {
        return $this->belongsTo('App\Models\Patient', 'patient_id');
    }
    public function doctors()
    {
        return $this->belongsTo('App\Models\Doctor', 'doctor_id');
    }
}
