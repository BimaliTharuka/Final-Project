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
        return view('Admin.admission_requests', compact('admissionRequests'));
    }

    // Store a new admission request in the database
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'exam_id' => 'required|exists:exams,id',
            'student_id' => 'required|exists:users,id',
        ]);

        AdmissionRequest::create($validatedData);

        return redirect()->route('student.exam-request')->with('success', 'Admission request submitted successfully.');
        
    }

    //show the admission request form
    public function view($id)
    {
        $admissionRequest = AdmissionRequest::findOrFail($id);
        return view('Admin.admission_view', compact('admissionRequest'));
    }

    // Update the status of an admission request

    public function AcceptAdmissionRequest(Request $request, $id)
    {
        $admissionRequest = AdmissionRequest::findOrFail($id);
        $admissionRequest->status = "Accepted";
        $admissionRequest->save();

        return redirect()->route('admission.index')->with('success', 'Admission request Accepted.');
    }

    public function DeclineAdmissionRequest(Request $request, $id)
    {
        $admissionRequest = AdmissionRequest::findOrFail($id);
        $admissionRequest->status = "Declined";
        $admissionRequest->save();

        return redirect()->route('admission.index')->with('success', 'Admission request Declined.');
    }
    // Delete an admission request from the database
    public function destroy($id)
    {
        $admissionRequest = AdmissionRequest::findOrFail($id);
        $admissionRequest->delete();

        return redirect()->route('admission.index')->with('success', 'Admission request deleted successfully.');
    }
}
