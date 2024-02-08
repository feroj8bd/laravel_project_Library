<div class="mt-3">
    <a href="{{ url('/') }}" class="btn btn-success">Home</a>

    <span class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">
            Books
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a href=" {{ route('books.create') }}" class="dropdown-item">Add Book</a></li>
            <li><a href="{{ route('books.index') }}" class="dropdown-item">All Books</a></li>

        </ul>
    </span>

    <span class="dropdown">
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">
            Students
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a href=" {{ route('student.create') }}" class="dropdown-item">Add student</a></li>
            <li><a href="{{ route('student.index') }}" class="dropdown-item">All students</a></li>

        </ul>
    </span>
    
    <span class="dropdown">
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">
            Book Distribution
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a href=" {{ route('distribution.create') }}" class="dropdown-item">New distribution</a></li>
            <li><a href="{{ route('distribution.index') }}" class="dropdown-item">All distribution</a></li>

        </ul>
    </span>



</div>
