@extends('main')

@section('content')
        <form action="{{ url('admin/category/create') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group ">
                <label for="">Title</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group ">
                <label for="">Description</label>
                <input type="text" name="description" class="form-control">
            </div>
                <label for="">Category Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label>Kích Hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Slider</button>
        </div>
        @csrf
    </form>
@endsection