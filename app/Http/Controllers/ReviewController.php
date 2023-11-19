<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ReviewController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            // Lấy giá trị book_id từ request
            //   return response()->json($request,200,[],JSON_PRETTY_PRINT);
            $bookId = $request->input('book_id');
            // Kiểm tra xem cuốn sách có tồn tại không
            $book = Book::find($bookId);
           
            if (!$book) {
                return redirect()->back()->with('error', 'Cuốn sách không tồn tại.');
            }
           
            // Kiểm tra dữ liệu từ form
            $validator = Validator::make($request->all(), [
                'book_id' => 'required|exists:books,id',
                'comment' => 'required|string',
                'name' => 'nullable|string',
                'email' => 'nullable|email',
                'web' => 'nullable|url',
                'rating' => 'required|integer|between:1,5',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            // Tạo mới đánh giá và lưu vào cơ sở dữ liệu
            $review = new Review();
            $review->book()->associate($book); // Sử dụng relationship để thiết lập book_id
            $review->user_id = auth()->id();
            $review->comment = $request->comment;
            $review->name = $request->name;
            $review->email = $request->email;
            $review->web = $request->web;
            $review->rating = $request->rating;
            $review->save();

            return redirect()->back()->with('success', 'Đã thêm đánh giá và bình luận thành công.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra khi thêm đánh giá và bình luận.');
        }
    }

    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
