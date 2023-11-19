<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function newBooks()
    {
        $newBooks = Book::orderBy('created_at', 'desc')->limit(10)->get(); 
        return view('newBooks', ['newBooks' => $newBooks]);
    }
    public function upcoming()
    {
        $upcomingBooks = Book::upcoming()->get(); // Lấy sách sắp phát hành
        return view('upcoming', compact('upcomingBooks'));
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $books = Book::where('name', 'LIKE', "%$query%")->get();
        $categories = Category::all();
        return view('search', compact('books','categories','query'));
    }
    
    public function showByCategory(Category $category) {
        $categories = Category::all();
        $books = $category->books;
        $allAuthors = $category->books->pluck('author')->unique();
        return view('category.cate', compact('books', 'category','categories','allAuthors'));
    }

    public function showBooksByAuthor(Category $category, $author)
    {
        $categories = Category::all();
        $books = $category->books->where('author', $author);
        $allAuthors = $category->books->pluck('author')->unique();
        return view('category.cate', compact('books', 'allAuthors', 'category', 'categories'));
    }
    
    public function index()
    {
        $categories = Category::all();
        $books = Book::all();
        return view('book.index', compact('categories', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('book.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $author = $request->input('author');
        $quantity = $request->input('quantity');
        $price = $request->input('price');
        $category_id = $request->input('category_id');
        $description = $request->input('description');
        $discountRate = $request->input('discount_rate');
        $publisher = $request->input('publisher');
        $release_date = $request->input('release_date');
        $is_upcoming = $request->input('is_upcoming');
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images',$image);
        $data = [
            'name' => $name,
            'author' => $author,
            'quantity' => $quantity,
            'price' => $price,
            'image' => $image,
            'category_id' => $category_id,
            'description' => $description,
            'discount_rate' => $discountRate,
            'publisher' => $publisher,
            'release_date' => $release_date,
            'is_upcoming' => $is_upcoming
        ];
        Book::create($data);
        return redirect()->route('book.index')->with('success','book created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $author = $book->author;
        $booksBySameAuthor = Book::where('author', $author)
                                ->where('id', '!=', $book->id)
                                ->limit(5) 
                                ->get();
        $category = $book->category;
        $relatedBooks = Book::where('category_id', $category->id)
                    ->where('id', '!=', $book->id)
                    ->limit(5) 
                    ->get();
        $reviewBooks = Book::query()->where('id',$book->id)->with(['reviews'])->get();
        $reviews = $reviewBooks[0]->reviews;
        // return response()->json($reviews,200,[],JSON_PRETTY_PRINT);
        return view('book.detail', compact('book','booksBySameAuthor','relatedBooks','reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('book.edit', compact('categories','book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $name = $request->input('name');
        $author = $request->input('author');
        $quantity = $request->input('quantity');
        $price = $request->input('price');
        $category_id = $request->input('category_id');
        $description = $request->input('description');
        $discountRate = $request->input('discount_rate');
        $publisher = $request->input('publisher');
        $release_date = $request->input('release_date');
        $is_upcoming = $request->input('is_upcoming');
        $book->fill([
            'name' => $name,
            'author' => $author,
            'quantity' => $quantity,
            'price' => $price,
            'category_id' => $category_id,
            'description' => $description,
            'discount_rate' => $discountRate,
            'publisher' => $publisher,
            'release_date' => $release_date,
            'is_upcoming' => $is_upcoming
        ])->save();
        if($request->file('image') !== null){
            $image = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images', $image);
            $book->fill([
                'image' => $image,
            ])->save();
        }
        return redirect()->route('book.index')->with('success','Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.index')->with('success','Book deleted successfully');
    }
}
