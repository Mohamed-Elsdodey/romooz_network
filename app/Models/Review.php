<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Review extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded=[];
    protected $table='reviews';
    public $translatable = [
     'user_name','message'
    ];

    public function work(){
        return $this->belongsTo(OurWork::class,'app_name');
    }


}
