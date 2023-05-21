<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherInformation;
class TeacherInformationController extends Controller
{
    public function index()
    {
        $teacherInformations = TeacherInformation::all();
        return response()->json($teacherInformations);
    }

    public function show($id_teacher)
    {
        $teacherInformation = TeacherInformation::find($id_teacher);
        return response()->json($teacherInformation);
    }

    public function store(Request $request)
    {
        $teacherInformation = TeacherInformation::create($request->all());
        return response()->json($teacherInformation, 201);
    }

    public function update(Request $request, $id_teacher)
    {
        $teacherInformation = TeacherInformation::find($id_teacher);
        $teacherInformation->update($request->all());
        return response()->json($teacherInformation);
    }

    public function destroy($id_teacher)
    {
        $teacherInformation = TeacherInformation::find($id_teacher);
        $teacherInformation->delete();
        return response()->json(null, 204);
    }
}
