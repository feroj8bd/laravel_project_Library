<!DOCTYPE html>
<html>

<head>

    <title>Library </title>

    {{-- bootstarp cdn link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

        <h4 class="text-center mt-5">Add library Books </h4>
        <form action="{{ route('books.store') }}" method="post">
            @csrf

            {{-- book name --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="book_name">Book Name :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="book_name" id="book_name" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('book_name')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- book type --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="book_type">Book Type :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="book_type" id="book_type" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('book_type')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- writer name --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="writer_name">Writer Name :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="writer_name" id="writer_name" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('writer_name')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- issue date --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="issue_date">Issue Date :</label>
                </div>
                <div class="col-md-4">
                    <input type="date" name="issue_date" id="issue_date" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('issue_date')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- return date --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="return_date">Return Date :</label>
                </div>
                <div class="col-md-4">
                    <input type="date" name="return_date" id="return_date" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('return_date')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            {{-- button --}}
            <div class="row mt-3">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </div>
        </form>

        {{-- bootstarp js cdn --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    </div>
</body>

</html>
