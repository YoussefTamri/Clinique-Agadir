<?php

namespace App\Models;


use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;


    use HasTranslations;
    protected $table = 'doctors';
    public $translatable = ['Name'];

    public $timestamps = true;



    public function Categoys()
    {
        return $this->belongsTo('App\Models\Category', 'Category_id');
    }

    public function genders()
    {
        return $this->belongsTo('App\Models\Gender', 'Gender_id');
    }
}
