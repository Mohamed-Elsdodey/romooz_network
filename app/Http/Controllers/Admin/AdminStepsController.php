<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Step;
use Illuminate\Http\Request;

class AdminStepsController extends Controller
{
    public function getSteps(){

        $steps=Step::first();
        $languages=Language::where('is_active', 'active')->get();

        return view('admin.steps.index',compact('steps','languages'));

    }

    public function updateSteps(Request $request){


        $analysis = $design = $development=$test = [];
        foreach (Language::where('is_active', 'active')->get() as $index => $language) {
            $analysis[$language->title] = $request->analysis[$index];
            $design[$language->title] = $request->design[$index];
            $development[$language->title] = $request->development[$index];
            $test[$language->title]=$request->test[$index];
        }

        $steps=Step::first();

        $steps->update(
          [
              'analysis'=>$analysis,
              'design' =>$design,
              'development'=>$development,
              'test'=>$test,


              ]

        );

return response()->json(['status'=>true]);
    }


}
