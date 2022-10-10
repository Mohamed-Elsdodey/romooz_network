<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\OurService;
use Illuminate\Http\Request;

class WebServiceController extends Controller
{
    //
    public function show($id){
        $service=OurService::findOrFail($id);
        return view('web.services.details',compact('service'));
    }
}
