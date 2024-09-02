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
        return view('resit_requests.index', compact('resitRequests'));
    }

    // Store a new re-sit request in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'exam_id' => 'required|exists:exams,id',
            'student_id' => 'required|exists:users,id',
        ]);

        ResitRequest::create($validatedData);

        return redirect()->route('resit-requests.index')->with('success', 'Re-sit request submitted successfully.');
    }

    // Update the status of a re-sit request
    public function updateStatus(Request $request, $id)
    {
        $resitRequest = ResitRequest::findOrFail($id);
        $resitRequest->status = $request->input('status');
        $resitRequest->save();

        return redirect()->route('resit-requests.index')->with('success', 'Re-sit request status updated successfully.');
    }

    // Delete a re-sit request from the database
    public function destroy($id)
    {
        $resitRequest = ResitRequest::findOrFail($id);
        $resitRequest->delete();

        return redirect()->route('resit-requests.index')->with('success', 'Re-sit request deleted successfully.');
    }
}
