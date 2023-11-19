<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $categories =Category::all();
        view()->share('categories', $categories);
    }
    public function index(){
        return view('cart.checkout');
    }
    // public function placeOrder(Request $request)
    // {
    //     Session::forget('cart');

    //     return redirect()->route('checkout')->with('success', 'Đặt hàng thành công!');
    // }
}
