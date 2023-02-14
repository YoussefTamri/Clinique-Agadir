<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';


    public $timestamps = true;



    public function doctors()
    {
        return $this->belongsTo('App\Models\Doctor', 'doctor_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Statusrooom', 'Status_id');
    }

}
