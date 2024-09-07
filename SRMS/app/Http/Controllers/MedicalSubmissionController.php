<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalSubmission;
use Illuminate\Support\Facades\Storage;

class MedicalSubmissionController extends Controller
{
    // Show the form for creating a new medical submission (for students)
    public function create()
    {
        return view('Student.medical_submission'); // Adjust the view as needed
    }

    // Store a newly created medical submission (for students)
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'medical_condition' => 'required|string',
            'submission_date' => 'required|date',
            'medical_report' => 'required|file|mimes:pdf,doc,docx'
        ]);

        $path = $request->file('medical_report')->store('medical_reports');

        MedicalSubmission::create([
            'student_id' => $request->student_id,
            'medical_condition' => $request->medical_condition,
            'submission_date' => $request->submission_date,
            'medical_report_path' => $path,
            'status' => 'pending'
        ]);

        return redirect()->route('student.dashboard')->with('success', 'Medical report submitted successfully!');
    }

    // Display all medical submissions (for admins)
    public function index()
    {
        $medicalSubmissions = MedicalSubmission::with('student')->get(); // Fetch all submissions with student info
        return view('admin.medical_submissions', compact('medicalSubmissions')); // Pass the medicalSubmissions variable
    }

    // Update the status of a medical submission (for admins)
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string'
        ]);

        $submission = MedicalSubmission::findOrFail($id);
        $submission->status = $request->status;
        $submission->save();

        return redirect()->route('admin.medical-submissions')->with('success', 'Medical submission status updated successfully!');
    }

    // Accept a medical submission
    public function accept($id)
    {
        $submission = MedicalSubmission::findOrFail($id);
        $submission->status = 'accepted';
        $submission->save();

        return redirect()->route('admin.medical-submissions')->with('success', 'Medical submission accepted successfully!');
    }

    // Reject a medical submission
    public function reject($id)
    {
        $submission = MedicalSubmission::findOrFail($id);
        $submission->status = 'rejected';
        $submission->save();

        return redirect()->route('admin.medical-submissions')->with('success', 'Medical submission rejected successfully!');
    }

    // Download or view the medical report
    public function download($id)
    {
        $submission = MedicalSubmission::findOrFail($id);
        return Storage::download($submission->medical_report_path);
    }
}
