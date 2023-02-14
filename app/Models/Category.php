<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;
    public $translatable = ['Name'];

    protected $fillable = ['Name' , 'Notes'];

    protected $table = 'categories';

    public $timestamps = true ;



}
