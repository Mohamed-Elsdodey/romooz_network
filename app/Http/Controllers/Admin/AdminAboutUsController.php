<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Language;
use Illuminate\Http\Request;

class AdminAboutUsController extends Controller
{

    public function index()
    {
        $about=AboutUs::first();
        $languages=Language::where('is_active', 'active')->get();


        return view('admin.aboutUs.index',compact('about','languages'));

    }

    public function updateByAdmin(Request $request){

        $data = $this->validate($request, [

            'desc'=>'required|array',
            'desc.*'=>'required',
            'our_vision'=>'required|array',
            'our_vision.*'=>'required',
            'our_ambition'=>'required|array',
            'our_ambition.*'=>'required',
            'our_goal'=>'required|array',
            'our_goal.*'=>'required',
        ]);
        $dat=[];

        $our_vision= [];
        foreach (Language::where('is_active','active')->get() as $index=>$language){
            $our_vision[$language->title] = $request->our_vision[$index];
        }
        $dat['our_vision'] = $our_vision;

        $desc = [];
        foreach (Language::where('is_active','active')->get() as $index=>$language){
            $desc[$language->title] = $request->desc[$index];
        }
        $dat['desc'] = $desc;



        $our_ambition= [];
        foreach (Language::where('is_active','active')->get() as $index=>$language){
            $our_ambition[$language->title] = $request->our_ambition[$index];
        }
        $dat['our_ambition'] = $our_ambition;

        $our_goal = [];
        foreach (Language::where('is_active','active')->get() as $index=>$language){
            $our_goal[$language->title] = $request->our_goal[$index];
        }
        $dat['our_goal'] = $our_goal;




        $about= AboutUs::first();
        $about->update($dat);




        return response()->json(1, 200);


    }







    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
