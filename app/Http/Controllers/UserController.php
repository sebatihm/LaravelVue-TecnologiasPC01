<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users, 200);
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
            'roleId' => 'required|numeric',
            'tuition' => 'required|max:12',
            'name' => 'required|string|max:45',
            'lastName'=> 'required|string|max:45',
            'motherLastName' => 'required|string|max:45',
            'email' => 'required|email|string|max:255',
            'password'=> 'required|string|max:255',
            'universityCareer' => 'nullable|string',
        ]);

        $user = User::create([
            'role_id' => $request->roleId,
            'tuition'=>$request->tuition,
            'name'=>$request->name,
            'last_name'=>$request->lastName,
            'mother_last_name'=>$request->motherLastName,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'university_career'=>$request->universityCareer,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'created_by' => Auth::id()
        ]);

        return response()->json([
            'message' => 'Usuario dado de alta de alta exitosamente',
            'data' => $user,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show( $userId)
    {
        $user = User::findOrFail($userId);
        return response()->json($user, 201);
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
    public function update(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        $request->validate([
            'roleId' => 'required|numeric',
            'tuition' => 'required|max:12',
            'name' => 'required|string|max:45',
            'lastName'=> 'required|string|max:45',
            'motherLastName' => 'required|string|max:45',
            'email' => 'required|email|string|max:255',
            'password'=> 'required|string|max:255',
            'universityCareer' => 'nullable|string',
        ]);

        $user->update([
            'role_id' => $request->roleId,
            'tuition'=>$request->tuition,
            'name'=>$request->name,
            'last_name'=>$request->lastName,
            'mother_last_name'=>$request->motherLastName,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'university_career'=>$request->universityCareer,
            'updated_at' => Carbon::now(),
            'updated_by' => Auth::id()
        ]);

        return response()->json([
            'message' => 'Usuario editado exitosamente.',
            'user' => $user
        ], 201);
    }

    public function getStudents(){
        $students = User::where('role_id', 3)->get();

        return response()->json([
            'message' => 'Se han consultado todos los maestros',
            'data' => $students,
        ],201);
    }

    public function getTeachers(){
        $teachers = User::where('role_id',2)->get();

        return response()->json([
            'message' => 'Se han consultado todos los maestros',
            'data' => $teachers,
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($userId)
    {
        $user = User::findOrFail($userId);

        $user->deleted_by = Auth::id();
        $user->save();
        $user->delete();

        return response()->json([
            'message' => 'Se ha eliminado el usuario.'
        ], 201);
    }
}
