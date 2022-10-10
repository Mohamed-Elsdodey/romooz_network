<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class WebTermsConditionController extends Controller
{

    public function index(){
        $settings=Setting::first();
        return view('web.termsCondition.index',compact('settings'));
    }

}
