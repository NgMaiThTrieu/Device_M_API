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
        $faculty = Faculty::find($id);

        if (!$faculty) {
            return response()->json(['message' => 'Khoa không tồn tại'], 404);
        }
    
        // Kiểm tra giá trị 'Faculty_Name' trước khi cập nhật
        $facultyName = $request->input('Faculty_Name');
        if (!is_null($facultyName)) {
            $faculty->Faculty_Name = $facultyName;
        }
    
        // Cập nhật các trường khác
        $faculty->Image = $request->input('Image');
        $faculty->Status = $request->input('Status');
    
        $faculty->save();
    
        return response()->json(['message' => 'Chỉnh sửa khoa thành công'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faculty = Faculty::find($id);

        if (!$faculty) {
            return response()->json(['message' => 'Faculty not found'], 404);
        }
    
        $faculty->status = 0;
        $faculty->save();
    
        return response()->json(['message' => 'Faculty deleted']);
    }
}
