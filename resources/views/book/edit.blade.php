@extends('templates.appAdmin')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
  <body>
    <div>
        <p class="fw-medium fs-5" style="padding: 0 20px">Book Edit</p>
    </div>
    <form action="{{ route('book.update',$book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row" style="padding: 20px 170px">
            <div class="col-6">
            <label class="form-label">Name Book</label>
            <input type="text" class="form-control" value="{{$book->name}}" name="name">
            </div> 
            <div class="col-6">
            <label class="form-label">Category</label>
            <select class="form-control" name="category_id" required>
              @foreach ($categories as $category)
              <option value="{{ $category->id }}" {{ $category->id == $book->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
              @endforeach
            </select>
            </div>
            <div class="col-6">
              <label class="form-label" style="padding: 5px 0 0 0">Price Book</label>
              <input type="text" class="form-control" value="{{$book->price}}" name="price">
            </div>
            <div class="col-6">
              <label class="form-label" style="padding: 5px 0 0 0">Discount Rate</label>
              <input type="text" class="form-control" value="{{$book->discount_rate}}" name="discount_rate">
            </div>
            <div class="col-6">
            <label class="form-label" style="padding: 5px 0 0 0">Quantity</label>
            <input type="text" class="form-control" value="{{$book->quantity}}" name="quantity">
            </div>
            <div class="col-6">
            <label class="form-label" style="padding: 5px 0 0 0">Publisher</label>
            <input type="text" class="form-control" value="{{$book->publisher}}" name="publisher">
            </div>
            <div class="col-6">
            <label class="form-label" style="padding: 5px 0 0 0">Image</label>
            <input class="form-control" name="image" type="file">
            <img src="{{ asset('storage/images/' . $book->image) }}" alt="{{ $book->title }}" width="100">
            </div>
            <div class="col-6">
            <label class="form-label" style="padding: 5px 0 0 0">Author</label>
            <input type="text" class="form-control" value="{{$book->author}}" name="author">
            </div>
            <div class="col-6">
              <label class="form-label" style="padding: 5px 0 0 0">Release Date</label>
              <input type="date" class="form-control" name="release_date" value="{{ $book->release_date }}">
            </div>
            <div class="col-6">
                <label class="form-label" style="padding: 5px 0 0 0">Is Upcoming</label>
                <select class="form-control" name="is_upcoming">
                  <option value="1" {{ $book->is_upcoming ? 'selected' : '' }}>Yes</option>
                  <option value="0" {{ !$book->is_upcoming ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="col-12">
              <label class="form-label" style="padding: 5px 0 0 0">Description</label>
            </div>
            <div class="col-12">
              <textarea class="form-control" name="description">{{ $book->description }}</textarea>
            </div>
            <div>
            <button type="submit" class="btn btn-outline-info col-12" style="margin: 12px 0 30px 0">Submit</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
@endsection