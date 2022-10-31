<?php

namespace App\Http\Controllers\Admin\Crud;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Offer;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdminOfferController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $dataTables = Offer::query()->latest();

            return DataTables::of($dataTables)

                ->editColumn('created_at', function ($row) {
                    return date('Y/m/d',strtotime($row->created_at));
                })
                ->editColumn('title', function ($row) {
                    return $row->title;
                })
                ->addColumn('delete_all', function ($row) {
                    return "<input type='checkbox' class=' delete-all form-check-input' data-tablesaw-checkall name='delete_all' id='" . $row->id . "'>";
                })
                ->addColumn('actions', function ($row) {
                    $edit = '';
                    $delete = '';
//                    if (!checkPermission(12))
//                        $edit = 'hidden';
//                    if (!checkPermission(13))
//                        $delete = 'hidden';
                    return "<button $edit  class='btn btn-info editButton' id='" . $row->id . "'> <i class='fa fa-edit'></i></button>
                   <button $delete class='btn btn-danger  delete' id='" . $row->id . "'><i class='fa fa-trash'></i> </button>";
                })
                ->rawColumns(['actions',/* 'desc',*/ 'delete_all','title'])->make(true);
        }
        return view('admin.crud.offers.index');
    }


    public function create(Request $request)
    {
        if ($request->ajax()){
            $returnHTML = view("admin.crud.offers.parts.add_form")->with([
                'languages'=>Language::where('is_active','active')->get(),
            ])->render();
            return response()->json(array('success' => true, 'html'=>$returnHTML));
        }
    }



    public function store(Request $request)
    {
        $data = $this->validate($request,[
            'title'=>'required|array',
            'title.*'=>'required',
            'price'=>'required|regex:/^\d+(\.\d{1,2})?$/',

        ]);
        //$data = $request->except(['title','desc']);
        $name = [];
        foreach (Language::where('is_active','active')->get() as $index=>$language){
            $name[$language->title] = $request->title[$index];
        }
        $data['title'] = $name;
        $data['price'] = $request->price;
        /*  $data ['image'] = $this->uploadFiles('our_services',$request->file('image'),null );*/
        Offer::create($data);
        return response()->json(1,200);

    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request , $id)
    {
        if ($request->ajax()){
            $returnHTML = view("admin.crud.offers.parts.edit_form")
                ->with([
                    'obj' =>Offer::findOrFail($id),
                    'languages'=>Language::where('is_active','active')->get(),
                ])
                ->render();
            return response()->json(array('success' => true, 'html'=>$returnHTML));
        }
    }

    public function update(Request $request,$id)
    {
        $slider = Offer::findOrFail($id);
        $data = $this->validate($request,[
            'title'=>'required|array',
            'title.*'=>'required',
            'price'=>'required|regex:/^\d+(\.\d{1,2})?$/',

        ]);
        try{

            $name = [];
            /* $desc = [];*/
            foreach (Language::where('is_active','active')->get() as $index=>$language){
                $name[$language->title] = $request->title[$index];
            }
            $data['title'] = $name;
            /*  $data['desc'] = $desc;*/
            $data['price'] = $request->price;
            $slider->update($data);
            return response()->json(1,200);
        }catch (\Exception $exception){
            return response()->json($exception->getMessage(),500);
        }
    }


    public function destroy($id)
    {
        return response()->json(Offer::destroy($id),200);
    }



    public function delete_all(Request $request)
    {
        Offer::destroy($request->id);
        return response()->json(1,200);
    }


}
