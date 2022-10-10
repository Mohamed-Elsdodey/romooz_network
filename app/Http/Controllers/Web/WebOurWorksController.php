<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\OurWork;
use Illuminate\Http\Request;

class WebOurWorksController extends Controller
{
    public function index(Request $request){


        if($request->type==''|| !$request->type) {
            $works = OurWork::paginate(9);
        }
        else
        {
            $works = OurWork::whereHas('types',function ($query) use ($request){
                $query->where('type.id',$request->type);
            })->paginate(9);

        }

$current_page = $works->currentPage();
$last_page = $works->lastPage();

if ($request->ajax()) {
    $returnHTML = view('web.ourWorks.parts.workComponent',compact('works'))
        ->render();
    return response()->json([
        'success' => true,
        'html' => $returnHTML,
        'current_page' => $current_page,
        'last_page' => $last_page,
    ]);
}




return view('web.ourWorks.index', [
    'works' => $works,
    'current_page' => $current_page,
    'last_page' => $last_page,
]);
    }
}
