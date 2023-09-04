<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstarp cdn link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Show All Books</title>
</head>

<body>
    <div class="container">
        <div class="mt-3">
            <a href="{{ url('/') }}" class="btn btn-success">Home</a>
            <a href=" {{ route('books.create') }}" class="btn btn-success">Add Book</a>
            <a href="{{ route('books.index') }}" class="btn btn-warning">See All Books</a>
        </div>

        @if (Session::has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{ Session::get('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h3 class="text-center mt-5">Book Information</h3>

        <div class="row">
            <div class="col-md-2">Book Name :</div>
            <div class="col-md-4"> {{ $books->book_name }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Book Type :</div>
            <div class="col-md-4"> {{ $books->book_type }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Writer Name :</div>
            <div class="col-md-4"> {{ $books->writer_name }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Issue Date :</div>
            <div class="col-md-4"> {{ $books->issue_date }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Return Date :</div>
            <div class="col-md-4"> {{ $books->return_date }}</div>
        </div>

    </div>


    {{-- bootstarp js cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
