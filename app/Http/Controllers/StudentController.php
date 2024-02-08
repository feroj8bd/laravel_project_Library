<?php

namespace App\Http\Controllers;

use App\Models\library;
use App\Models\student;
use App\Models\Student as ModelsStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::orderBy('id', 'DESC')->paginate(4);

        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //image aice ki na ai ta check kori
        // return dd(request()->all());


        $data = $request->validate([
            'name' => 'required|string|max:60',
            'phone' => 'required|string|max:60',
            'department' => 'required|string|max:60',
            'semester' => 'required|string|max:60',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        //image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        // return $data;

        Student::create($data);

        return redirect()->back()->withSuccess('student has been saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Student::findOrFail($id);

        return view('student.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students = Student::findOrFail($id);

        return view('student.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:60',
            'phone' => 'required|string|max:60',
            'department' => 'required|string|max:60',
            'semester' => 'required|string|max:60',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        // return dd($request->all());
        //image update
        if ($request->hasFile('image')) {
            // Check if an old image exists and delete it
            if ($student->image) {
                Storage::disk('public')->delete($student->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        // return
        $student->update($data);

        return redirect()->route('student.index')->withSuccess('student data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // return 'go'; resource route hole update and delete er somoy Extra method add korte hoy?

        $student = Student::findOrFail($id);
        // Check if an old image exists and delete it
        if ($student->image) {
            Storage::disk('public')->delete($student->image);
        }
        $student->delete();

        return redirect()->back()->withSuccess('Student has been deleted successfully');
    }
    
}
