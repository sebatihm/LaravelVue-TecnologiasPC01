<?php

namespace App\Http\Controllers;

use App\Models\EducationalExperience;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationalExperienceController extends Controller
{
    /**
    * @OA\Get(
    *     path="/api/educational_experiences",
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
        $educationalExperiences = EducationalExperience::all();
        return response()->json($educationalExperiences, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nrc' => 'required|string|max:5',
            'name' => 'required|string',
            'modality' => 'required|string',
            'description' => 'nullable|string'
        ]);

        $educationalExperience = EducationalExperience::create([
            'nrc' => $request->nrc,
            'name' => $request->name,
            'modality' => $request->modality,
            'description' => $request->description,
            'created_by' => Auth::id(),
            'updated_by' => Auth::id(),
        ]);

        return response()->json([
            'message' => "Experiencia educativa creada exitosamente",
            'data' => $educationalExperience,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show( $educationalExperience)
    {
        $educationalExp = EducationalExperience::findOrFail($educationalExperience);
        return response()->json([
            'data' => $educationalExp
        ], 201);
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
    public function update(Request $request,  $educationalExperience)
    {
        $educationalExp = EducationalExperience::findOrFail($educationalExperience);
        $request->validate([
            'nrc' => 'required|string|max:5',
            'name' => 'required|string',
            'modality' => 'required|string',
            'description' => 'nullable|string'
        ]);

        $educationalExp->update([
            'nrc' => $request->nrc,
            'name' => $request->name,
            'modality' => $request->modality,
            'description' => $request->description,
            'updated_at' => Carbon::now(),
            'updated_by' => Auth::id(),
        ]);

        return response()->json([
            'message' => "Experiencia editada exitosamente",
            'data' => $educationalExp,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy ($educationalExperienceId)
    {
        $educationalExperience = EducationalExperience::findOrFail($educationalExperienceId);
        $educationalExperience->delete();
        return response()->json([
            'message' => 'Experiencia educativa eliminada exitosamente.'
        ], 201);
    }
}
