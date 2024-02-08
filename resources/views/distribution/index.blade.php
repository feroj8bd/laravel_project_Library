<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstarp cdn link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>distribution</title>
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

        <h2 class="text-center mt-5">See Our All distributions</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Student Name</th>
                    <th>Book Name</th>
                    <th>Issue Date</th>
                    <th>Return Date</th>
                    <th>Action</th>
                    {{-- <th>Total distributions</th> --}}
                </tr>
            </thead>

            <tbody>
                @foreach ($distributions as $distribution)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $distribution->student?->name }}</td>
                        <td>{{ $distribution->book->book_name }}</td>
                        <td>{{ $distribution->issue_date }}</td>
                        <td>{{ $distribution->return_date }}</td>
                        <td>
                            <a href="{{ route('distribution.show', $distribution->id) }}"class="btn btn-info">Show</a>

                            <a href="{{ route('distribution.edit', $distribution->id) }}" class="btn btn-warning">Edit</a>

                            <a href="{{ route('distribution.destroy', $distribution->id) }}" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
      {{ $distributions->links() }}
      
    </div>

    {{-- bootstarp js cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
