<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\Result;
use App\Models\ResultType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ResultController;

class ResultController extends Controller
{
    public function index() {
        $results = Result::all();
        
        return view('Lecturer.exam_result', compact('results'));
    }

    public function create() {
        $courses = Course::all();
        $batches = Batch::all();
        $types = ResultType::all();
        return view('Lecturer.addresults', compact('courses', 'batches', 'types'));
    }

    public function store(Request $request) {
        $request->validate([
            'course_id' => 'required',
            'batch_id' => 'required',
            'type_id' => 'required',
            'file' => 'required|mimes:csv,txt'
        ]);
    
        $file = $request->file('file');
        $path = $file->getRealPath();
        $data = array_map('str_getcsv', file($path));
    
        foreach ($data as $row) {
            Result::create([
                'course_id' => $request->course_id,
                'batch_id' => $request->batch_id,
                'type_id' => $request->type_id,
                'student_id' => $row[0],
                'marks' => $row[1],
            ]);
        }
    
        return redirect()->route('results.index')->with('success', 'Results uploaded successfully');
    }
    
    public function show($id) {
        $result = Result::find($id);
        return view('Lecturer.viewresults', compact('result'));
    }

     // Delete an exam from the database
     public function destroy($id)
     {
         $result = Result::findOrFail($id);
         $result->delete();
 
         return redirect()->route('results.index')->with('success', 'Exam deleted successfully.');
     }

}