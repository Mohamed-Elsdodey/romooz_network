<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\OurService;
use App\Models\Review;
use App\Models\Setting;
use App\Models\Statistic;
use App\Models\Step;
use Illuminate\Http\Request;

class WebHomeController extends Controller
{
    public function index(){

        $settings=Setting::first();
        $services=OurService::take(6)->get();
        $about=AboutUs::first();
        $statistics=Statistic::get();
        $reviews=Review::get();
        $steps=Step::first();

        return view('web.home.home',compact('services','settings','about','statistics','reviews','steps'));
    }
}
