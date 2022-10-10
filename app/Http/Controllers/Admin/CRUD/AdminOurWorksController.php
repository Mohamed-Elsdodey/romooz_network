<?php

namespace App\Http\Controllers\Admin\CRUD;

use App\Http\Controllers\Controller;
use App\Http\Traits\Upload_Files;
use App\Models\BiographySkill;
use App\Models\Language;
use App\Models\OurWork;
use App\Models\OurWorkType;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdminOurWorksController extends Controller
{

    use Upload_Files;



    public function __construct()
    {
        /* $this->middleware([('permission:siteTexts index,admin')])->only(['index']);*/
    }

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $works = OurWork::query()->orderBy("id", "DESC");
            return DataTables::of($works)
                ->editColumn('image', function ($row) {
                    return ' <img src="' . get_file($row->image) . '" class="rounded" style="height:60px;width:60px;"
                             onclick="window.open(this.src)">';
                })
                ->editColumn('created_at', function ($row) {
                    return date('Y/m/d', strtotime($row->created_at));
                })
                ->addColumn('delete_all', function ($row) {
                    return "<input type='checkbox' class=' delete-all form-check-input' data-tablesaw-checkall name='delete_all' id='" . $row->id . "'>";
                })
                ->editColumn('title', function ($row) {
                    return "<a target='_blank' href='".$row->url."'>$row->title</a>";
                })
                ->editColumn('desc', function ($row) {
                    return $row->desc;
                })

                ->addColumn('actions', function ($row) {

                    return "<button   class='btn btn-info editButton' id='" . $row->id . "'> <i class='fa fa-edit'></i></button>
                   <button  class='btn btn-danger  delete' id='" . $row->id . "'><i class='fa fa-trash'></i> </button>";
                })->rawColumns(['actions', 'image', 'delete_all','title','desc'])->make(true);
        }
        return view('admin.crud.ourWorks.index');
    }


    public function create(Request $request)
    {
        if ($request->ajax()) {
            $returnHTML = view("admin.crud.ourWorks.parts.add_form")
                ->with([
                ])
                ->render();
            return response()->json(array('success' => true, 'html' => $returnHTML));
        }
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'image'=>'required|image',
            'title'=>'required|array',
            'title.*'=>'required',
            'desc'=>'required|array',
            'desc.*'=>'required',
            'types'=>'required',
//            'url'=>'required',
//            'icon'=>'required',
        ]);
        $dat=[];
        $dat ['image'] = $this->uploadFiles('ourWorks', $request->file('image'), null);

//        $dat['icon']=$request->icon;

        $title = [];
        foreach (Language::where('is_active','active')->get() as $index=>$language){
            $title[$language->title] = $request->title[$index];
        }
        $dat['title'] = $title;
        $dat['url']=$request->url;
        $desc = [];
        foreach (Language::where('is_active','active')->get() as $index=>$language){
            $desc[$language->title] = $request->desc[$index];
        }
        $dat['desc'] = $desc;

        $work= OurWork::create($dat);

//        if($request->has('types')){
//            OurWorkType::where('ourWork_id',$work->id)->delete();
//
//            for ($i=0;$i<count($request->types);$i++)
//            {
//                OurWorkType::updateOrCreate([
//                    'ourWork_id'=>$work->id,
//                    'type_id'=>$request->types[$i]
//                ]);
//            }
//
//        }


        if($request->has('types')){

            OurWorkType::where('ourWork_id',$work->id)->delete();

            foreach ($request->types as $index => $type) {
                OurWorkType::updateOrCreate([
                    'ourWork_id' => $work->id,
                    'url' => $request[$type],
                    'type_id' => $type,
                ]);
            }
        }

        return response()->json(1, 200);

    }


    public function show($id)
    {

    }


    public function edit(Request $request,$id)
    {

        if ($request->ajax()) {
            $returnHTML = view("admin.crud.ourWorks.parts.edit_form")
                ->with([
                    'work' => OurWork::findOrFail($id)
                ])
                ->render();
            return response()->json(array('success' => true, 'html' => $returnHTML));
        }
    }


    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'image'=>'nullable|image',
            'title'=>'required|array',
            'title.*'=>'required',
            'desc'=>'required|array',
            'desc.*'=>'required',
            'types'=>'required',
//            'url'=>'required',

        ]);
        $dat=[];
        $dat['url']=$request->url;
        if ($request->image){
            $dat ['image'] = $this->uploadFiles('ourWorks', $request->file('image'), null);

        }

        $title = [];
        foreach (Language::where('is_active','active')->get() as $index=>$language){
            $title[$language->title] = $request->title[$index];
        }
        $dat['title'] = $title;

        $desc = [];
        foreach (Language::where('is_active','active')->get() as $index=>$language){
            $desc[$language->title] = $request->desc[$index];
        }
        $dat['desc'] = $desc;

        $work= OurWork::findOrFail($id);
        $work->update($dat);


        if($request->has('types')){

            OurWorkType::where('ourWork_id',$work->id)->delete();

            foreach ($request->types as $index => $type) {
                OurWorkType::updateOrCreate([
                    'ourWork_id' => $work->id,
                    'url' => $request[$type],
                    'type_id' => $type,
                ]);
            }
        }




        return response()->json(1, 200);
    }


    public function destroy($id)
    {
        OurWorkType::where('ourWork_id',$id)->delete();

        return response()->json(OurWork::destroy($id), 200);
    }

    public function delete_all(Request $request)
    {
        OurWork::destroy($request->id);
        return response()->json(1, 200);
    }

}
