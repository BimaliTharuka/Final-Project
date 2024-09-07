<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ResitRequest;
use Illuminate\Http\Request;

class ResitRequestController extends Controller
{
    // Show all re-sit requests
    public function index()
    {
        $users = User::all();
        $resitRequests = ResitRequest::with('exam', 'student')->get();
        return view('Admin.resit_requests', compact('resitRequests','users'));
    }

    // Store a new re-sit request in the database
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'exam_id' => 'required|exists:exams,id',
            'student_id' => 'required',
        ]);

        ResitRequest::create($validatedData);

        return redirect()->route('student.exam-request')->with('success', 'Re-sit request submitted successfully.');
    }

    
    //show the admission request form
    public function view($id)
    {
        $resitRequests = ResitRequest::findOrFail($id);
        return view('Admin.resitform_view', compact('resitRequests')); // balde file
    }

    // Update the status of an admission request

    public function AcceptResitRequest(Request $request, $id)
    {
        $resitRequests = ResitRequest::findOrFail($id);
        $resitRequests->status = "Accepted";
        $resitRequests->save();

        return redirect()->route('resit.index')->with('success', 'Admission request Accepted.');
    }


    // Update the status of a re-sit request
    public function DeclineResitRequest(Request $request, $id)
    {
        $resitRequests = ResitRequest::findOrFail($id);
        $resitRequests->status = "Declined";
        $resitRequests->save();

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
