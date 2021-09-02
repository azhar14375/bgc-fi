<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    {
        $product=Product::latest()->first();
        return view('index',compact('product'));
    }

    public function products()
    {
        $product=Product::latest()->first();
        return view('products',compact('product'));

    }

    public function cart()
    {
        return view('cart');
    }

    public function addToCart(Request $request)
    {
        $id=$request->id;
        $product = Product::findOrFail($id);
        $cart = session()->get('cart',[]);
        if(isset($cart[$id]))
        {
            $cart[$id]['quantity']++;
        }
        else
        {
            $cart[$id]=[
                'name' => $product->name,
                'quantity' => 1,
                'description'=>$product->description,
                'price' => $product->price,
                'image' => $product->image
            ];
        }
        session()->put('cart',$cart);
        return "Successfylly Added to Cart";
    }

    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart',$cart);
            session()->flash('success','Cart Updated Successfully');
        } 

    }

    public function removeFromCart(Request $request)
    {
        if($request->id)
        {
            $cart=session()->get('cart');
            if(isset($cart[$request->id]))
            {
                unset($cart[$request->id]);
                session()->put('cart',$cart);
            }
            return 'Removed From Cart';
        }
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

}
