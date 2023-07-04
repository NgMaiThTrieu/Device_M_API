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
        // $username = $request->input('Username');

        // // Kiểm tra xem username đã tồn tại hay chưa
        // $existingTeacher = TeacherInformation::where('Username', $username)->first();
        // if ($existingTeacher) {
        //     return response()->json(['error' => 'Username đã tồn tại'], 400);
        // }

        // // Tạo một TeacherInformation mới
        // $teacherInformation = TeacherInformation::create($request->all());

        // return response()->json($teacherInformation, 201);

        $username = $request->input('Username');

        // Kiểm tra xem username đã tồn tại hay chưa
        $existingTeacher = TeacherInformation::where('Username', $username)->first();
        if ($existingTeacher) {
            return response()->json(['error' => 'Username đã tồn tại'], 400);
        }

        // Mã hóa mật khẩu bằng MD5
        $password = md5($request->input('Password'));

        // Tạo một TeacherInformation mới với mật khẩu đã mã hóa
        $teacherInformation = TeacherInformation::create([
            'Faculty_ID' => $request->input('Faculty_ID'),
            'Image' => $request->input('Image'),
            'Username' => $username,
            'Password' => $password,
            'Teacher_Name' => $request->input('Teacher_Name'),
            'Phone_Number' => $request->input('Phone_Number'),
            'Address' => $request->input('Address'),
            'Gender' => $request->input('Gender'),
            'Date_Of_Birth' => $request->input('Date_Of_Birth'),
            'IsDeleted' => $request->input('IsDeleted'),
            'Status' => $request->input('Status'),
        ]);

        return response()->json($teacherInformation, 201);
    }

    public function update(Request $request, $id_teacher)
    {
        // // Lấy thông tin giáo viên cần cập nhật
        // $teacherInformation = TeacherInformation::find($id_teacher);

        // if (!$teacherInformation) {
        //     return response()->json(['error' => 'Không tìm thấy giáo viên'], 404);
        // }

        // // Kiểm tra xem username đã tồn tại hay chưa (nếu có thay đổi)
        // $username = $request->input('Username');
        // if ($username !== $teacherInformation->Username) {
        //     $existingTeacher = TeacherInformation::where('Username', $username)->first();
        //     if ($existingTeacher) {
        //         return response()->json(['error' => 'Username đã tồn tại'], 400);
        //     }
        // }

        // // Mã hóa mật khẩu bằng MD5 (nếu có thay đổi)
        // $password = $request->input('Password');
        // if ($password) {
        //     $password = md5($password);
        // }

        // // Cập nhật thông tin giáo viên
        // $teacherInformation->update([
        //     'Faculty_ID' => $request->input('Faculty_ID'),
        //     'Image' => $request->input('Image'),
        //     'Username' => $username,
        //     'Password' => $password,
        //     'Teacher_Name' => $request->input('Teacher_Name'),
        //     'Phone_Number' => $request->input('Phone_Number'),
        //     'Address' => $request->input('Address'),
        //     'Gender' => $request->input('Gender'),
        //     'Date_Of_Birth' => $request->input('Date_Of_Birth'),
        //     'IsDeleted' => $request->input('IsDeleted'),
        //     'Status' => $request->input('Status'),
        // ]);

        // return response()->json($teacherInformation);

        // Mã hóa mật khẩu bằng MD5 (nếu có thay đổi)
        $password = md5($request->input('Password'));
        $teacherInformation = TeacherInformation::find($id_teacher);
        if ($teacherInformation->Password != $password) {
            $request->merge(['Password' => $password]);
        }

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
