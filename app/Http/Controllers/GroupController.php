<?php

namespace App\Http\Controllers;

use App\Models\EducationalExperience;
use App\Models\Group;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($educationalExperience)
    {

        $groups = Group::where('educational_experience_id', $educationalExperience)->get();
        return response()->json($groups, 201);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($educationalExperience)
    {
        $educationalExperience = EducationalExperience::findOrFail($educationalExperience);
        return response()->json($educationalExperience, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'educationalExperienceId' => 'required|numeric',
            'teacherId' => 'required|numeric',
            'name' => 'required|string|max:45',
            'shift' => 'required|string|max:12',
            'period' => 'required|string|max:45'
        ]);

        $group = Group::create([
            'educational_experience_id' => $request->educationalExperienceId,
            'teacher_id' => $request->teacherId,
            'name' => $request->name,
            'shift' => $request->shift,
            'period' => $request->period,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'created_by' => Auth::id()
        ]);

        return response()->json([
            'message' => 'Grupo creado exitosamente',
            'data' => $group
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show($groupId)
    {
        $group = Group::findOrFail($groupId);

        return Inertia::render('Groups/GroupShow', [
            'group' => $group,
            'educationalExperience' => $group->educationalExperience ?? null,
            'teacher' => $group->teacher ?? null,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $groupId)
    {
        $group = Group::findOrFail($groupId);

        $request->validate([
            'educationalExperienceId' => 'required|numeric',
            'teacherId' => 'required|numeric',
            'name' => 'required|string|max:45',
            'shift' => 'required|string|max:12',
            'period' => 'required|string|max:45'
        ]);


        $group->update([
            'educational_experience_id' => $request->educationalExperienceId,
            'teacher_id' => $request->teacherId,
            'name' => $request->name,
            'shift' => $request->shift,
            'period' => $request->period,
            'updated_at' => Carbon::now(),
            'updated_by' => Auth::id()
        ]);


        return response()->json([
            'message' => 'Se ha editado el grupo con exito.',
            'data' => $group
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($groupId)
    {
        $group = Group::findOrFail($groupId);
        $group->deleted_by = Auth::id();
        $group->save();
        $group->delete();

        return response()->json([
            'message' => 'Se ha eliminado el grupo correctamente.'
        ],201);
    }

    public function teacherGroups($teacherId)
    {
        $groups = Group::where('teacher_id', $teacherId);
        return response()->json($groups, 201);
    }

    public function studentsByGroup($groupId){
        $students = User::join('enrollments', 'users.id', '=', 'enrollments.student_id')
            ->where('enrollments.group_id', $groupId)
            ->select('users.*')->get();

        return response()->json($students, 201);

    }
}
