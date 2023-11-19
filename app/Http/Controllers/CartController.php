<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $categories = Category::all();
        view()->share('categories', $categories);
    }
    public function addToCart($bookId)
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;

            $cartItem = Cart::where('user_id', $userId)->where('book_id', $bookId)->first();

            if ($cartItem) {
                $cartItem->increment('quantity');
            } else {
                Cart::create([
                    'user_id' => $userId,
                    'book_id' => $bookId,
                    'quantity' => 1,
                ]);
            }

            return redirect()->back()->with('success', 'Sách đã được thêm vào giỏ hàng của bạn.');
        } else {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để thêm sách vào giỏ hàng.');
        }
    }

    public function viewCart()
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;

            $cartItems = Cart::where('user_id', $userId)->with('book')->get();

            return view('cart.cart', compact('cartItems'));
        } else {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để xem giỏ hàng của bạn.');
        }
    }

    public function showPayment()
    {
        return view('cart.checkout');
    }

    public function removeCartItem($id)
    {
        Cart::where('id', $id)->delete();
        return redirect()->route('cart.view')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }

}
