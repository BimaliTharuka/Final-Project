<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;

class CourseController extends Controller
{
    public function index()
{
    $courses = Course::all();
    return view('Admin.Course_manage', compact('courses'));
}

public function create()
{
    return view('Admin.course_create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'nullable'
    ]);

    Course::create($request->all());

    Course::create([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
    ]);

    return redirect()->route('courses.index')->with('success', 'Course created successfully.');
}

public function show($id)
{
    $course = Course::findOrFail($id);
    return view('Admin.course_view', compact('course'));
}

public function edit($id)
{
    $course = Course::findOrFail($id);
    return view('Admin.course_edit', compact('course'));
}

public function update(Request $request, $id)
{
    $course = Course::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $course->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
        
    return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
}

public function destroy($id)
{
    $course = Course::findOrFail($id);
    $course->delete();

    return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
}

}
