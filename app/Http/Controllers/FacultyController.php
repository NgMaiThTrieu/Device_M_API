<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faculties = Faculty::all();
        return response()->json($faculties);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $faculties = Faculty::create($request->all());
        return response()->json($faculties, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $faculties = Faculty::find($id);
        if(!$faculties){
            return response()->json(['message'=>'Faculty not found',404]);
        }
        return response()->json($faculties);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $faculties = Faculty::find($id);
        if (!$faculties) {
            return response()->json(['message' => 'Faculty not found'], 404);
        }
        $faculties->Faculty_Name = $request->input('Faculty_Name');
        $faculties->save();
        return response()->json($faculties);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faculties = Faculty::find($id);
        if (!$faculties) {
            return response()->json(['message' => 'Faculty not found'], 404);
        }
        $faculties->delete();
        return response()->json(['message' => 'Faculty deleted']);
    }
}
