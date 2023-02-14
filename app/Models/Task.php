<?php

namespace App\Models;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $table = 'task';
    public $translatable = ['name'];

    public $timestamps = true;


    public function doctors()
    {
        return $this->belongsTo('App\Models\Doctor', 'doctor_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status', 'Status_id');
    }
}
