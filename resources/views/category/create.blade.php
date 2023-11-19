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
        <p class="fw-medium fs-5" style="padding: 0 20px">Category Add</p>
    </div>
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row" style="padding: 0 170px">
            <div class="col-6">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" placeholder="ID" disabled>
            </div>
            <div class="col-6">
                <label class="form-label">Name Category</label>
                <input type="text" class="form-control" name="name">
                </div>
            <div>
            <button type="submit" class="btn btn-outline-info col-12" style="margin: 12px 0">Submit</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
@endsection