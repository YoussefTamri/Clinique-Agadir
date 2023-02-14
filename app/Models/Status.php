<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;



class Status extends Model
{
    use HasTranslations;
    protected $table = 'status';
    public $translatable = ['Name'];
    protected $fillable =['Name'];
}
