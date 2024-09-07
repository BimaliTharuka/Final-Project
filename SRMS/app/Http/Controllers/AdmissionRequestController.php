<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AdmissionRequest;

class AdmissionRequestController extends Controller
{
    // Show all admission requests
    public function index()
    {
        $users = User::all();
        $admissionRequests = AdmissionRequest::with('exam', 'student')->get();
        // dd($admissionRequests);
        return view('Admin.admission_requests', compact('admissionRequests','users'));
    }

    // Store a new admission request in the database
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'exam_id' => 'required|exists:exams,id',
            'student_id' => 'required',
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
