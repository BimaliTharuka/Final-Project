<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    // Show all exams
    public function index()
    {
        $exams = Exam::all();
        return view('Admin.exam_management', compact('exams'));
    }

    // Show the form to create a new exam
    public function create()
    {
        return view('Admin.exam_create');
    }

    // Store a new exam in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'exam_name' => 'required|string|max:255',
            'exam_date' => 'required|date',
            'course' => 'required|string|max:255',
        ]);

        Exam::create($validatedData);

        return redirect()->route('exams.index')->with('success', 'Exam created successfully.');
    }

    // Show the form to edit an existing exam
    public function edit($id)
    {
        $exam = Exam::findOrFail($id);
        return view('Admin.exam_edit', compact('exam'));
    }

    public function view($id)
    {
        $exam = Exam::findOrFail($id);
        return view('Admin.exam_show', compact('exam'));
    }

    // Update an existing exam in the database
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'exam_name' => 'required|string|max:255',
            'exam_date' => 'required|date',
            'course' => 'required|string|max:255',
        ]);

        $exam = Exam::findOrFail($id);
        $exam->update($validatedData);

        return redirect()->route('exams.index')->with('success', 'Exam updated successfully.');
    }

    // Delete an exam from the database
    public function destroy($id)
    {
        $exam = Exam::findOrFail($id);
        $exam->delete();

        return redirect()->route('exams.index')->with('success', 'Exam deleted successfully.');
    }
}
