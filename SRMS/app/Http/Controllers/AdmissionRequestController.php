<?php

namespace App\Http\Controllers;

use App\Models\AdmissionRequest;
use Illuminate\Http\Request;

class AdmissionRequestController extends Controller
{
    // Show all admission requests
    public function index()
    {
        $admissionRequests = AdmissionRequest::with('exam', 'student')->get();
        return view('admission_requests.index', compact('admissionRequests'));
    }

    // Store a new admission request in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'exam_id' => 'required|exists:exams,id',
            'student_id' => 'required|exists:users,id',
        ]);

        AdmissionRequest::create($validatedData);

        return redirect()->route('admission-requests.index')->with('success', 'Admission request submitted successfully.');
    }

    // Update the status of an admission request
    {
        $admissionRequest = AdmissionRequest::findOrFail($id);
        $admissionRequest->status = $request->input('status');
        $admissionRequest->save();

        return redirect()->route('admission-requests.index')->with('success', 'Admission request status updated successfully.');
    }

    // Delete an admission request from the database
    public function destroy($id)
    {
        $admissionRequest = AdmissionRequest::findOrFail($id);
        $admissionRequest->delete();

        return redirect()->route('admission-requests.index')->with('success', 'Admission request deleted successfully.');
    }
}
