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

        @include('allMenu')

        @if (Session::has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{ Session::get('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h4 class="text-center mt-5">New Book Distribution </h4>
        <form action="{{ route('distribution.store') }}" method="post">
            @csrf

            {{-- book name --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="book_name">Selct Student :</label>
                </div>
                <div class="col-md-4">
                    <select name="student_id" id="" class="form-control">
                        <option selected disabled >--- Select One ----</option>
                        @foreach ($students as $student)
                        <option value="{{$student->id }}">{{ $student->name }}</option>
                        @endforeach
                        
                      
                    </select>
                </div>
                <div class="col-md-4">
                    @error('student_id')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- book type --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="book_type">select Book :</label>
                </div>
                <div class="col-md-4">
                    <select name="book_id" id="" class="form-control">
                        <option >--Select Book--</option>
                        @foreach ($books as $book)
                        <option value="{{ $book->id }}">{{ $book->book_name }}</option>
                            
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    @error('book_id')
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
