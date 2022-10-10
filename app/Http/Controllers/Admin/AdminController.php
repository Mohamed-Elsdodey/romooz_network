<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Biography;
use App\Models\Category;
use App\Models\Contact;
use App\Models\FrequentlyQuestion;
use App\Models\Order;
use App\Models\OurService;
use App\Models\OurWork;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class AdminController extends Controller
{

    public function __construct()
    {

    }


    public function index(Request $request)
    {


        $admins = Admin::count();
        $users = User::count(); // User::where("type","normal_user")->count();
        $faq=FrequentlyQuestion::count();
        $works=OurWork::count();
        $services=OurService::count();
        $contacts=Contact::count();
        $reviews=Review::count();
        return view('admin.home.dashboard', [
            'admins' => $admins,
            'users' => $users,
            'faq'=>$faq,
            'works'=>$works,
            'services'=>$services,
            'contacts'=>$contacts,
            'reviews'=>$reviews,
        ]);
    }//end fun


//    public function getCompaniesDetails(Request $request)
//    {
//        $ids = explode(',',$request->ids);
//        $companies = User::whereIn('id',$ids)->get();
//        return redirect()->route('companies.index')->with([
//            'ids'=>$ids
//        ]);
//    }//end fun


}//end
