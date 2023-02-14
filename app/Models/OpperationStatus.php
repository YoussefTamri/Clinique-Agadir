<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class OpperationStatus extends Model
{
    use HasFactory;

    use HasTranslations;
    protected $table = 'opperation_statuses';
    public $translatable = ['Name'];
    protected $fillable =['Name'];
}
