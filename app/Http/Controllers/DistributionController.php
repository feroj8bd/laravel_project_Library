<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Distribution;
use App\Models\library;
use App\Models\Student;
use Illuminate\Http\Request;

class DistributionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    return $distributions = Distribution::with('student')->get();
        $distributions = Distribution::with('student','book')->paginate(5);
        return view('distribution.index', compact('distributions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        $books = Book::all();
        return view('distribution.create', compact('students', 'books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'student_id' => 'required|numeric',
            'book_id' => 'required|numeric',
            'issue_date' => 'required|date',
            'return_date' => 'required|date'
        ]);

        Distribution::create($data);

        return redirect()->back()->withSuccess('Distribution has been successfully ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
