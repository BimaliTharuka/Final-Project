<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BatchController;

class BatchController extends Controller
{
    public function index()
{
    $batches = Batch::with('course')->get();
    return view('Admin.batch_manage', compact('batches'));
}

public function create()
{
    $courses = Course::all();
    return view('Admin.batch_create', compact('courses'));
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'course_id' => 'required'
    ]);

    Batch::create([
        'name' => $request->input('name'),
        'course_id' => $request->input('course_id'),
    ]);

    return redirect()->route('batches.index')->with('success', 'Batch created successfully.');
}

public function show($id)
{
    $batch = Batch::findOrFail($id);
        return view('Admin.batch_view', compact('batch'));
}

public function edit($id)
{
    $batch = Batch::with('course')->findOrFail($id);
    $courses = Course::all();
    return view('Admin.batch_edit', compact('batch', 'courses'));
}

public function update(Request $request, $id) 
{
    $batch = Batch::findOrFail($id);

        $request->validate([
            'name' => 'required',
            // 'course_id' => 'required',
        ]);

        $batch->update([
            'name' => $request->input('name'),
            // 'course_id' => $request->input('course_id'),
        ]);

        return redirect()->route('batches.index')->with('success', 'Batch updated successfully.');
}

public function destroy($id)
{
    $batch = Batch::findOrFail($id);
    $batch->delete();

    return redirect()->route('batches.index')->with('success', 'Batch deleted successfully.');
}

}
