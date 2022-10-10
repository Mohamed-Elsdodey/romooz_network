<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class OurWork extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table='our_works';
    protected $guarded=[];
    public $translatable = [
        'title','desc'
    ];
    public function types(){
        return $this->belongsToMany(Type::class,'our_works_type','ourWork_id','type_id');
    }

    public function our_work_data()
    {
        return $this->hasMany(OurWorkType::class,'ourWork_id');
    }

}
