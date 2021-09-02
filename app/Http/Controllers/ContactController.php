<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    
    public function contactQuery(Request $request)
    {
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message
        ];
        Contact::create($data);
        echo "success";
    }
}
