<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;


class GroupController extends Controller
{
    /**
    * @OA\Get(
    *     path="/api/groups",
    *     summary="Mostrar grupos",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los grupos."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function index()
    {
        $groups = Group::all();
        return response()->json($groups, 200);
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
        return response()->json($group, 201);
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
    * @OA\Get(
    *     path="/api/groups-detailed",
    *     summary="Mostrar un grupo detalladamente",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar la informacion completa de un grupo en especifico.",
    *         @OA\JsonContent(
    *             @OA\Property(property="group_id", type="integer")
    *        )
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function getGroupDetailedInfo(Request $request)
    {
        $request->validate([
            'group_id' => 'required|numeric'
        ]);


        $group = DB::table('groups')
                    ->join('educational_experiences', 'groups.educational_experiences_id','=','educational_experiences.id')
                    ->join('users','groups.teacher_id', '=' , 'users.id')
                    ->where('groups.id',$request->group_id)
                    ->select('users.name as teacher_name','users.last_name as teacher_last_name','users.mother_last_name as teacher_mother_last_name','groups.name','groups.shift','groups.period','educational_experiences.name as ee_name','educational_experiences.nrc','educational_experiences.modality')
                    ->get();

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
}
