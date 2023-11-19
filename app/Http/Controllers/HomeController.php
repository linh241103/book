<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::all();
        $bookImages = [];
        foreach ($categories as $category) {
            $book = Book::where('category_id', $category->id)
                        ->orderBy('created_at', 'asc')
                        ->first();
            $bookImages[$category->name] = $book->image_path; 
        }
        $upcomingBooks = Book::upcoming()->limit(10)->get();
        $newBooks = Book::orderBy('created_at', 'desc')->limit(10)->get(); 
        return view('index', compact('categories', 'bookImages', 'upcomingBooks','newBooks'));
    }
    
}
