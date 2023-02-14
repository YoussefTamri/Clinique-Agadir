<?php

namespace App\Models;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $table = 'patients';
    public $translatable = ['name'];


    public $timestamps = true;




    public function doctors()
    {
        return $this->belongsTo('App\Models\Doctor', 'doctor_id');
    }
    public function rooms()
    {
        return $this->belongsTo('App\Models\Room', 'room_id');
    }
    public function status()
    {
        return $this->belongsTo('App\Models\PatientStatus', 'status_id');
    }
    public function payment()
    {
        return $this->belongsTo('App\Models\payment', 'payment_id');
    }


}
