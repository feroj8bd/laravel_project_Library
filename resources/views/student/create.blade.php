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

        <h4 class="text-center mt-5">Add New Student </h4>
        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data"> 
            @csrf

            {{-- book name --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="student_name">Name :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="name" id="student_name" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('name')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- Student Phone --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="phone">Phone :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('phone')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- Student Department --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="department">Department :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="department" id="department" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('department')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- Semester --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="semester">Semester :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="semester" id="semester" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('semester')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <!-- student image  -->
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="image">Image :</label>
                </div>
                <div class="col-md-4">
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('image')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>


            <!-- button-->
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
