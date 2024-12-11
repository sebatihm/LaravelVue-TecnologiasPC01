<?php

namespace App\Http\Controllers;

use App\Models\EducationalExperience;
use App\Models\Enrollment;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($studentId)
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($studentId)
    {
        $student = User::findOrFail($studentId);

        $studentProgram = $student->educative_program_id;

        $educationalExperiences = EducationalExperience::where('educative_program', $studentProgram)->pluck('id');

        $groups = Group::whereIn('educational_experience_id', $educationalExperiences)->get();

        return response()->json([
            'groups' => $groups,
        ],201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'studentId' => 'required|numeric',
            'groupId' => 'required|numeric',
            'studentGrade' => 'nullable'
        ]);

        $enrollment = Enrollment::create([
            'student_id' => $request->studentId,
            'group_id' => $request->groupId,
            'student_grade' => $request->studentGrade
        ]);

        return response()->json([
            'message' => "Inscripción realizada exitosamente.",
            'data' => $enrollment,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($enrollmentId)
    {
        $enrolment = Enrollment::findOrFail($enrollmentId);
        return response()->json($enrolment, 201);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($enrollmentId)
    {
        $enrollment = Enrollment::findOrFail($enrollmentId);
        $groups = Group::all();
        $students = User::where('role_id', 3)->get();

        return response()->json([
            'enrollment' => $enrollment,
            'groups' => $groups,
            'students' => $students
        ],201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $enrollmentId)
    {
        $enrollment = Enrollment::findOrFail($enrollmentId);

        $request->validate([
            'studentId' => 'required|numeric',
            'groupId' => 'required|numeric',
            'studentGrade' => 'nullable'
        ]);

        $enrollment->update([
            'student_id' => $request->studentId,
            'group_id' => $request->groupId,
            'student_grade' => $request->studentGrade
        ]);

        return response()->json([
            'message' => "La inscripción fue editada exitosamente.",
            'enrollment' => $enrollment
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy ($enrollmentId)
    {
        $enrolment = Enrollment::findOrFail($enrollmentId);
        $enrolment->delete();
        return response()->json([
            'message' => "El alumno ha sido dado de baja del grupo exitosamente."
        ]);
    }

    public function groupsByStudent($studentId)
    {
        $enrollments = Enrollment::where('student_id', $studentId)->pluck('group_id');
        $groups = Group::whereIn('id', $enrollments);

        return response()->json($groups, 201);
    }
}
