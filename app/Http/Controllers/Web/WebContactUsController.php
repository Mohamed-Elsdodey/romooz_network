<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class WebContactUsController extends Controller
{
    public function index(){
        $settings=Setting::first();
        return view('web.contact.index',compact('settings'));
    }
}
