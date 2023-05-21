<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Faculty;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $depart = Faculty::all();
        return response()->json($depart);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $khoa = Faculty::create([
            'Department_Name' => $request->input('Department_Name')
        ]);
        return response()->json($khoa);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $depart = Faculty::find($id);
        if(!$depart){
            return response()->json(['message'=>'Department not found',404]);
        }
        return response()->json($depart);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $depart = Faculty::find($id);
        if (!$depart) {
            return response()->json(['message' => 'Department not found'], 404);
        }
        $depart->Department_Name = $request->input('Department_Name');
        $depart->save();
        return response()->json($depart);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $depart = Faculty::find($id);
        if (!$depart) {
            return response()->json(['message' => 'Department not found'], 404);
        }
        $depart->delete();
        return response()->json(['message' => 'Department deleted']);
    }
}
