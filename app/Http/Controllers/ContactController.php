<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contact_us(Request $request)
    {

        $Idata = [
            'name'=>$request->name,
            "phone"=>$request->phone,
            "email"=>$request->email,
            "subject"=>$request->subject,
            "message"=>$request->message
        ];
        Contact::create($Idata);
        return response()->json(['data' => $request->all(), 'message' => 'good contact', 'status' => 200], 200);

    }//end fun


}//end class
