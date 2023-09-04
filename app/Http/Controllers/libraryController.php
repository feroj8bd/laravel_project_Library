<?php

namespace App\Http\Controllers;

use App\Models\library;
use Illuminate\Http\Request;

class libraryController extends Controller
{
    // index function
    public function index(){
        // return 'hi';
        $books =library::all();
        return view('books.index', compact('books'));
    }

    //create function 
    public function create()
    {
        // return 'hi';
        return view('books.create');
    }

    // store function
    public function store(Request $request)
    {
        // return 'hi';
        // validation
        $allBooks = $request->validate([
            'book_name' => 'required|string|max:60',
            'book_type' => 'nullable|string|max:60',
            'writer_name' => 'required|string|max:60',
            'issue_date' => 'required|string|max:60',
            'return_date' => 'required|string|max:60',
        ]);

        library::create($allBooks);
        return redirect()->back()->withSuccess('data successfully save');
    }

    // show function
    public function show($id){
        // return 'hi';
        $books =library::findOrFail($id);

        return view('books.show', compact('books'));
    }

    // edit function
    public function edit($id){
        // return 'hi';
        $books =library::findOrFail($id);
        return view('books.edit', compact('books'));
    }

    // update function
    public function update(Request $request, $id){
        $books =library::findOrFail($id);

        $allBooks = $request->validate([
            'book_name' => 'required|string|max:60',
            'book_type' => 'nullable|string|max:60',
            'writer_name' => 'required|string|max:60',
            'issue_date' => 'required|string|max:60',
            'return_date' => 'required|string|max:60',
        ]);

        $books->update($allBooks);
        
        return redirect()->route('books.index')->withSuccess('data updated successfully');
    }

    // delete function
    public function destroy($id){
        $books =library::findOrFail($id);
        $books->delete();

        return redirect()->back()->withSuccess('data deleted');
    }
}
