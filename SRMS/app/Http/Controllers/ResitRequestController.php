<?php

namespace App\Http\Controllers;

use App\Models\ResitRequest;
use Illuminate\Http\Request;

class ResitRequestController extends Controller
{
    // Show all re-sit requests
    public function index()
    {
        $resitRequests = ResitRequest::with('exam', 'student')->get();
        return view('Admin.resit_requests', compact('resitRequests'));
    }

    // Store a new re-sit request in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'exam_id' => 'required|exists:exams,id',
            'student_id' => 'required|exists:users,id',
        ]);

        ResitRequest::create($validatedData);

        return redirect()->route('student.exam-request')->with('success', 'Re-sit request submitted successfully.');
    }

    
    //show the admission request form
    public function view($id)
    {
        $admissionRequest = AdmissionRequest::findOrFail($id);
        return view('Admin.resitform_view', compact('admissionRequest')); // balde file
    }

    // Update the status of an admission request

    public function AcceptAdmissionRequest(Request $request, $id)
    {
        $admissionRequest = AdmissionRequest::findOrFail($id);
        $admissionRequest->status = "Accepted";
        $admissionRequest->save();

        return redirect()->route('resit.index')->with('success', 'Admission request Accepted.');
    }


    // Update the status of a re-sit request
    public function DeclineAdmissionRequest(Request $request, $id)
    {
        $admissionRequest = AdmissionRequest::findOrFail($id);
        $admissionRequest->status = "Declined";
        $admissionRequest->save();

        return redirect()->route('resit.index')->with('success', 'Admission request Declined.');
    }

    // Delete a re-sit request from the database
    public function destroy($id)
    {
        $resitRequest = ResitRequest::findOrFail($id);
        $resitRequest->delete();

        return redirect()->route('resit.index')->with('success', 'Re-sit request deleted successfully.');
    }
}
