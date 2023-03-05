@extends('main')
@section('content')
        <form action="{{ url('admin/product_image/create/'.$id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="col-md-6">
            </div>
            <label for="file">Category Image</label>
            <input type="file" name="image[]" class="form-control" accept="image/*" multiple>
        </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
        </div>
        @csrf
    </form>
@endsection 