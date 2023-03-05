@extends('main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
                <div class="card-body">

                    <form action="{{ url('admin/category/update/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">category Name</label>
                            <input type="text" name="name" value="{{$category->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" value="{{$category->description}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">category  Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset('uploads/category/'.$category->image) }}" width="70px" height="70px" alt="Image">
                        </div>
                        <div class="form-group">
                            <label>Kích Hoạt</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" value="1" type="radio" id="active" name="active" 
                                {{ $category->active == 1 ? 'checked' : '' }}>
                                <label for="active" class="custom-control-label">Có</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" 
                                {{ $category->active == 0 ? 'checked' : '' }}>
                                <label for="no_active" class="custom-control-label">Không</label>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update category</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection