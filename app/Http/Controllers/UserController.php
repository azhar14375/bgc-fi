<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $product=Product::latest()->first();
        return view('index',compact('product'));
    }
    
    public function pofileSetting()
    {
        return view('change_password');
    }
    public function orders()
    {
        return view('user_orders');
    }
}
