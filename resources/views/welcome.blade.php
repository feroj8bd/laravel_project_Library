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
        <h4 class="text-center mt-5">This is our Laibary Booking System</h4>
    </div>

     {{-- bootstarp js cdn --}}
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
</body>

</html>
