@extends('admin.main')
@section('head')
@endsection
@section('contents')
    <form action="" method="post">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label for="faculties">Tên khoa</label>
                <input type="text" name="faculty_name" class="form-control" placeholder="Nhập tên khoa">
            </div>

            <div class="form-group">
                <label for="faculties">Ảnh khoa</label>
                <input type="file" name="image_validate" class="form-control" id="upload">

                <div id="image_show" class="mt-4">

                </div>
                <input type="hidden" name="image" id="image">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Xác nhận</button>
        </div>
    </form>
@endsection
@section('footer')
@endsection
