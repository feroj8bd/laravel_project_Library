<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstarp cdn link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Show All Student</title>
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

        <h3 class="text-center mt-5">Student Information</h3>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4"> <img class="w-50" src="{{ asset('storage/'. $students->image) }}" alt=""></div>
        </div>
        
        <div class="row">
            <div class="col-md-2">Name :</div>
            <div class="col-md-4"> {{ $students->name }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Phone:</div>
            <div class="col-md-4"> {{ $students->phone }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Department:</div>
            <div class="col-md-4"> {{ $students->department }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Semester :</div>
            <div class="col-md-4"> {{ $students->semester }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Image :</div>
            <div class="col-md-4"> {{ $students->image }}</div>
        </div>

    </div>


    {{-- bootstarp js cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
