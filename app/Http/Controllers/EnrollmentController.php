<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;


class EnrollmentController extends Controller
{
    /**
    * @OA\Get(
    *     path="/api/enrollments",
    *     summary="Mostrar usuarios",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function index()
    {
        $enrollment = Enrollment::all();
        return response()->json($enrollment, 201);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Group::all();
        $students = User::where('role_id', 3)->get();

        return response()->json([
            'groups' => $groups,
            'students' => $students
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
}
