<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\Upload_Files;
use App\Models\Language;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    use Upload_Files;

    public function __construct()
    {
        /* $this->middleware([('permission:settings index,admin')])->only(['index']);*/
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $settings = Setting::firstOrNew();
        return view('admin.settings.index', [
            'settings' => $settings,
            'languages' => Language::where('is_active', 'active')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {


    }

    /**
     * @param Request $request
     * @param Setting $setting
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);
        // <input type="hidden" name="form_type" value="family">
        if ($request->form_type == "main") {
             $data =$this->updateMain($request);
        } elseif ($request->form_type == "logo") {
            $data = $this->updateLogo($setting, $request);
        } elseif ($request->form_type == "contact") {
             $data =$this->updateContact($request);
        } elseif ($request->form_type == "social") {
             $data =$this->updateSocial($request);
        } elseif ($request->form_type == "step") {
             $data =$this->updateStep($request);
        }elseif ($request->form_type == "about") {
             $data =$this->updateAbout($request);
        }elseif ($request->form_type == "family") {
             $data =$this->updateFamily($setting,$request);
        }
        elseif ($request->form_type == "header") {
            $data =$this->updateHeader($setting,$request);
        }

        Setting::updateOrCreate(['id' => 1], $data);
        $settings = Setting::first();
        return response()->json(['settings' => $settings, 'logo' => get_file($settings->header_logo)], 200);
    }//end fun


    /**
     * @param $id
     */
    public function destroy($id)
    {

    }//end fun

    //************************************************************************************************************************//
    //************************************************************************************************************************//
    //************************************************************************************************************************//

    private function updateMain($request)
    {
        $title = $footer_desc = $terms_condition = [];
        foreach (Language::where('is_active', 'active')->get() as $index => $language) {
            $title[$language->title] = $request->title[$index];
            $footer_desc[$language->title] = $request->footer_desc[$index];
//            $address1[$language->title] = $request->title[$index];
            $terms_condition[$language->title]=$request->terms_condition[$index];
        }
        return [
            "title" => $title,
            "footer_desc" => $footer_desc,
//            "address1" => $address1,
            "terms_condition"=>$terms_condition,
        ];
    }

    private function updateHeader($setting, $request){

        $tag = $header_title = $header_desc = [];
        foreach (Language::where('is_active', 'active')->get() as $index => $language) {
            $tag[$language->title] = $request->tag[$index];
            $header_title[$language->title] = $request->header_title[$index];
            $header_desc[$language->title] = $request->header_desc[$index];
        }
        return [
            "tag" => $tag,
            "header_title" => $header_title,
            "header_desc" => $header_desc,
        ];

    }


    private function updateLogo($setting, $request)
    {
        $data['header_logo'] = $setting->header_logo;
        $data['tap_logo'] = $setting->tap_logo;
        $data['footer_logo'] = $setting->footer_logo;
        //--------------------------------------------------
        if ($request->hasFile('header_logo'))
            $data['header_logo'] = $request->hasFile('header_logo')
                ? $this->uploadFiles('settings', $request->header_logo, $setting->header_logo)
                : $setting->header_logo;
        //--------------------------------------------------
        if ($request->hasFile('tap_logo'))
            $data['tap_logo'] = $request->hasFile('tap_logo')
                ? $this->uploadFiles('settings', $request->tap_logo, $setting->tap_logo)
                : $setting->tap_logo;
        //--------------------------------------------------
        if ($request->hasFile('footer_logo'))
            $data['footer_logo'] = $request->hasFile('footer_logo')
                ? $this->uploadFiles('settings', $request->footer_logo, $setting->footer_logo)
                : $setting->footer_logo;
        return $data;
    }

    private function updateContact($request)
    {
        return [
            "email1" => $request->email1,
            "email2" => $request->email2,
            "phone1" => $request->phone1,
            "phone2" => $request->phone2,
        ];
    }

    private function updateSocial($request)
    {
        return [
            "facebook" => $request->facebook,
            "twitter" => $request->twitter,
            "instagram" => $request->instagram,
            "linkedin" => $request->linkedin,
            "telegram" => $request->telegram,
            "youtube" => $request->youtube,
            "google_plus" => $request->google_plus,
            "snapchat_ghost" => $request->snapchat_ghost,
            "whatsapp" => $request->whatsapp,
        ];
    }

    private function updateStep($request)
    {
        $recruitment_step_desc = $recruitment_step1_desc = $recruitment_step2_desc =  [];
        $recruitment_step3_desc = $recruitment_step4_desc = $recruitment_step5_desc = [];
        foreach (Language::where('is_active', 'active')->get() as $index => $language) {
            $recruitment_step_desc[$language->title] = $request->recruitment_step_desc[$index];
            $recruitment_step1_desc[$language->title] = $request->recruitment_step1_desc[$index];
            $recruitment_step2_desc[$language->title] = $request->recruitment_step2_desc[$index];
            $recruitment_step3_desc[$language->title] = $request->recruitment_step3_desc[$index];
            $recruitment_step4_desc[$language->title] = $request->recruitment_step4_desc[$index];
            $recruitment_step5_desc[$language->title] = $request->recruitment_step5_desc[$index];
        }
        return [
            "recruitment_step_desc" => $recruitment_step_desc,
            "recruitment_step1_desc" => $recruitment_step1_desc,
            "recruitment_step2_desc" => $recruitment_step2_desc,
            "recruitment_step3_desc" => $recruitment_step3_desc,
            "recruitment_step4_desc" => $recruitment_step4_desc,
            "recruitment_step5_desc" => $recruitment_step5_desc,
        ];
    }

    private function updateAbout($request)
    {
        $our_service_desc =   [];

        foreach (Language::where('is_active', 'active')->get() as $index => $language) {
            $our_service_desc[$language->title] = $request->our_service_desc[$index];
//            $our_statistics_desc[$language->title] = $request->our_statistics_desc[$index];
//            $application_for_the_recruitment[$language->title] = $request->application_for_the_recruitment[$index];
        }
        return [
            "our_service_desc" => $our_service_desc,
//            "our_statistics_desc" => $our_statistics_desc,
//            "application_for_the_recruitment" => $application_for_the_recruitment,
        ];
    }

    private function updateFamily($setting,$request)
    {
        //--------------------------------------------------
        if ($request->hasFile('our_family_image1'))
            $data['our_family_image1'] = $request->hasFile('our_family_image1')
                ? $this->uploadFiles('settings', $request->our_family_image1, $setting->our_family_image1)
                : $setting->our_family_image1;
        //--------------------------------------------------
        if ($request->hasFile('our_family_image2'))
            $data['our_family_image2'] = $request->hasFile('our_family_image2')
                ? $this->uploadFiles('settings', $request->our_family_image2, $setting->our_family_image2)
                : $setting->our_family_image2;
        //--------------------------------------------------
        $our_family_title1 = $our_family_desc1 = $our_family_title2 =   $our_family_desc2 = [];
        foreach (Language::where('is_active', 'active')->get() as $index => $language) {
            $our_family_title1[$language->title] = $request->our_family_title1[$index];
            $our_family_desc1[$language->title] = $request->our_family_desc1[$index];
            $our_family_title2[$language->title] = $request->our_family_title2[$index];
            $our_family_desc2[$language->title] = $request->our_family_desc2[$index];
        }
        $data['our_family_title1'] = $our_family_title1;
        $data['our_family_desc1'] = $our_family_desc1;
        $data['our_family_title2'] = $our_family_title2;
        $data['our_family_desc2'] = $our_family_desc2;
        return $data;
    }


    public function getMapAddress(){

        $setting=Setting::first();
        return view('admin.settings.parts.getMapAddress',compact('setting'));
    }


    public function updateMapAddress(Request $request){
        $this->validate($request, [
            'latitude' => 'required',
            'longitude' => 'required',
            'address1'=>'required',
        ]);

        $setting=Setting::first();
        $setting->latitude=$request->latitude;
        $setting->longitude=$request->longitude;
        $setting->address1=$request->address1;
        $setting->save();

        return response()->json([], 200);



    }

}//end class
