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
        $username = $request->input('Username');

        // Kiểm tra xem username đã tồn tại hay chưa
        $existingTeacher = TeacherInformation::where('Username', $username)->first();
        if ($existingTeacher) {
            return response()->json(['error' => 'Username đã tồn tại'], 400);
        }

        // Tạo một TeacherInformation mới
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

        // if (!$teacherInformation) {
        //     return response()->json(['message' => 'Teacher not found'], 404);
        // }
    
        // $teacherInformation->IsDeleted = 0;
        // $teacherInformation->save();
    
        // return response()->json(['message' => 'Teacher deleted']);
    }
}
