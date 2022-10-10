<?php

namespace App\Http\Controllers\Admin\CRUD;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\OurWork;
use App\Models\OurWorkType;
use App\Models\Review;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdminReviewsController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $reviews = Review::query()->orderBy("id", "DESC");
            return DataTables::of($reviews)
                ->editColumn('created_at', function ($row) {
                    return date('Y/m/d', strtotime($row->created_at));
                })
                ->addColumn('delete_all', function ($row) {
                    return "<input type='checkbox' class=' delete-all form-check-input' data-tablesaw-checkall name='delete_all' id='" . $row->id . "'>";
                })
                ->editColumn('message', function ($row) {
                    return $row->message;
                })
                ->editColumn('user_name', function ($row) {
                    return $row->user_name;
                })
                ->editColumn('app_name', function ($row) {
                    return $row->work->title ?? '';
                })
                ->editColumn('evaluation', function ($row) {
                    if ($row->evaluation == 0)
                        return '';
                    elseif ($row->evaluation == 1)
                        return '
                    <ul class="m-0 pb-0 d-flex align-items-center" style="list-style: none">
                        <li class="p-1">
                            <i class="fa fa-star text-warning"></i>
                        </li>
                    </ul>
                    ';
                    elseif ($row->evaluation == 2)
                        return '
                    <ul class="m-0 pb-0 d-flex align-items-center" style="list-style: none">
                        <li class="p-1">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>

                        </li>
                    </ul>
                    ';

                    elseif ($row->evaluation == 3)
                        return '
                    <ul class="m-0 pb-0 d-flex align-items-center" style="list-style: none">
                        <li class="p-1">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>


                        </li>
                    </ul>
                    ';


                    elseif ($row->evaluation == 4)
                        return '
                    <ul class="m-0 pb-0 d-flex align-items-center" style="list-style: none">
                        <li class="p-1">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>

                        </li>
                    </ul>
                    ';


                    elseif ($row->evaluation == 5)
                        return '
                    <ul class="m-0 pb-0 d-flex align-items-center" style="list-style: none">
                        <li class="p-1">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>

                        </li>
                    </ul>
                    ';


                    else return '';
                })
                ->addColumn('actions', function ($row) {
                    return "<button   class='btn btn-info editButton' id='" . $row->id . "'> <i class='fa fa-edit'></i></button>
                   <button  class='btn btn-danger  delete' id='" . $row->id . "'><i class='fa fa-trash'></i> </button>";
                })->rawColumns(['actions', 'delete_all', 'message', 'user_name', 'app_name', 'evaluation'])->make(true);
        }
        return view('admin.crud.reviews.index');
    }


    public function create(Request $request)
    {
        if ($request->ajax()) {
            $returnHTML = view("admin.crud.reviews.parts.add_form")
                ->with([
                ])
                ->render();
            return response()->json(array('success' => true, 'html' => $returnHTML));
        }
    }

    public function store(Request $request)
    {

        $data = $this->validate($request, [
            'app_name' => 'required|exists:our_works,id',
            'evaluation' => 'required',
            'message' => 'required|array',
            'message.*' => 'required',
            'user_name' => 'required|array',
            'user_name.*' => 'required',
        ]);
        $dat = [];


        $user_name = [];
        foreach (Language::where('is_active', 'active')->get() as $index => $language) {
            $user_name[$language->title] = $request->user_name[$index];
        }
        $dat['user_name'] = $user_name;

        $message = [];
        foreach (Language::where('is_active', 'active')->get() as $index => $language) {
            $message[$language->title] = $request->message[$index];
        }
        $dat['message'] = $message;
        $dat['app_name'] = $request->app_name;
        $dat['evaluation'] = $request->evaluation;

        $review = Review::create($dat);

        return response()->json(1, 200);
    }


    public function show($id)
    {
        //
    }


    public function edit(Request $request, $id)
    {

        if ($request->ajax()) {
            $returnHTML = view("admin.crud.reviews.parts.edit_form")
                ->with([
                    'review' => Review::findOrFail($id)
                ])
                ->render();
            return response()->json(array('success' => true, 'html' => $returnHTML));
        }
    }


    public function update(Request $request, $id)
    {

        $data = $this->validate($request, [
            'app_name' => 'required|exists:our_works,id',
            'evaluation' => 'required',
            'message' => 'required|array',
            'message.*' => 'required',
            'user_name' => 'required|array',
            'user_name.*' => 'required',
        ]);
        $dat = [];


        $user_name = [];
        foreach (Language::where('is_active', 'active')->get() as $index => $language) {
            $user_name[$language->title] = $request->user_name[$index];
        }
        $dat['user_name'] = $user_name;

        $message = [];
        foreach (Language::where('is_active', 'active')->get() as $index => $language) {
            $message[$language->title] = $request->message[$index];
        }
        $dat['message'] = $message;
        $dat['app_name'] = $request->app_name;
        $dat['evaluation'] = $request->evaluation;

        $review = Review::findOrFail($id);
        $review->update($dat);

        return response()->json(1, 200);
    }

    public function destroy($id)
    {


        return response()->json(Review::destroy($id), 200);
    }

    public function delete_all(Request $request)
    {
        Review::destroy($request->id);
        return response()->json(1, 200);
    }
}
