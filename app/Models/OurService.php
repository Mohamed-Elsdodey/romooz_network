<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class OurService extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded=[];
    protected $table='our_services';
    public $translatable = [
        'title','desc'
    ];
}
