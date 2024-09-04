<!-- // app/Http/Controllers/StudentController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Replace with the correct model if different

class StudentController extends Controller
{
    public function getStudentMarks(Request $request)
    {
        // Validate input
        $request->validate([
            'studentId' => 'required|string',
            'degree' => 'required|string',
            'semester' => 'required|string',
        ]);

        $studentId = $request->input('studentId');
        $degree = $request->input('degree');
        $semester = $request->input('semester');

        // Fetch marks from database
        $marks = Student::where('id', $studentId)
                        ->where('degree', $degree)
                        ->where('semester', $semester)
                        ->first();

        if ($marks) {
            return response()->json([
                'mid_exam_marks' => $marks->mid_exam_marks,
                'assignment_marks' => $marks->assignment_marks,
                'final_marks' => $marks->final_marks,
            ]);
        } else {
            return response()->json(['error' => 'No data found'], 404);
        }
    }
} -->
