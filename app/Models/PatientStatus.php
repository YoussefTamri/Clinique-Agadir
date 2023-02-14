<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PatientStatus extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $table = 'patient_statuses';
    public $translatable = ['Name'];
    protected $fillable =['Name'];
}
