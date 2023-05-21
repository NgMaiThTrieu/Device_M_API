<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FacultyController extends Controller
{
    public function index()
    {
        $departs = Faculty::paginate(10);
        return view('admin.faculties.list', [
            'title' => 'Danh Sách Khoa',
            'departs' => $departs
        ]);
    }

    public function create()
    {
        return view('admin.faculties.add', [
            'title' => 'Thêm Khoa'
        ]);
    }

    public function store(Request $request)
    {
        Faculty::create([
            "Faculty_Name" => $request->input('faculty_name'),
            "image" => $request->input('image'),
        ]);
        try {
            Session::flash('success', 'Thêm khoa mới thành công');
        } catch (Exception $error) {
            Session::flash('error', 'Có lỗi vui lòng thử lại');
        }
        return redirect()->back();
    }


    public function show(Faculty $faculty)
    {
        return view('admin.faculties.edit', [
            'title' => 'Chỉnh Sửa Khoa ' . $faculty->Faculty_Name,
            'faculty' => $faculty,
        ]);
    }

    public function update(Request $request, Faculty $faculty)
    {
        $faculty->fill([
            "Faculty_Name" => $request->input('faculty_name'),
            "image" => $request->input('image'),
        ]);
        $faculty->save();
        try {

            Session::flash('success', 'Cập nhật khoa thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Có lỗi vui lòng thử lại');
        }

        return redirect()->back();
    }
    public function delete($id)
    {
        try {
            $result = false;
            $faculty = Faculty::where('Faculty_ID', $id)->first();

            if ($faculty) {
                $faculty->delete();
                $result = true;
            }

            if ($result) {
                return response()->json([
                    'error' => false,
                    'message' => 'Xóa khoa thành công'
                ]);
            }
        } catch (\Exception $error) {
            return response()->json([
                'error' => true,
                'message' => 'Đã có lỗi xảy ra'
            ]);
        }
    }

}
