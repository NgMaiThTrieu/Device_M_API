@extends('admin.main')
@section('head')
@endsection
@section('contents')
    <form action="" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">

            <div class="form-group">
                <label for="faculty">Tên khoa</label>
                <input type="text" name="faculty_name" value="{{ $faculty->Faculty_Name }}" class="form-control"
                    placeholder="Nhập tên khoa">
            </div>

            <div class="form-group">
                <label for="faculty">Ảnh khoa</label>
                <input type="file" name="image_validate" class="form-control" id="upload">
                <div id="image_show" class="mt-4">
                    <a href="{{ $faculty->image  }}" target="_blank">
                        <img src="{{ $faculty->image  }}" alt="" width="400px">
                    </a>
                </div>
                <input type="hidden" name="image" id="image" value="{{ $faculty->image }}">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập nhật khoa</button>
        </div>
    </form>
@endsection
@section('footer')
@endsection
