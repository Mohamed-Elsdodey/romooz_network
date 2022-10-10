<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\FrequentlyQuestion;
use App\Models\Setting;
use Illuminate\Http\Request;

class WebQuestionsController extends Controller
{
    public function index(){
        $questions=FrequentlyQuestion::take(6)->get();
        $settings=Setting::first();
        return view('web.questions.index',compact('questions','settings'));

    }
}
