<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutUs extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded=[];
    protected $table='about_us';
    public $translatable = [
        'title','desc','our_vision','our_ambition','our_goal'
    ];


}
