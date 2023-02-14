<?php

namespace App\Models;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'operations';

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
    public function patients()
    {
        return $this->belongsTo('App\Models\Patient', 'patient_id');
    }
    public function status()
    {
        return $this->belongsTo('App\Models\OpperationStatus', 'status_id');
    }
}
