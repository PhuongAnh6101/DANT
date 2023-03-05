@extends('main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
                <div class="card-body">

                    <form action="{{url('admin/product/update/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group ">
                            <label for="">Title</label>
                            <input type="text" name="name" value="{{$product->name}}" class="form-control">
                        </div>
                        <div class="form-group ">
                            <label for="">Description</label>
                            <input type="text" name="description" value="{{$product->description}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">banner  Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset('uploads/Product/'.$product->image) }}" width="70px" height="70px" alt="Image">
                        </div>
                        <div class="form-group ">
                            <label for="">Price</label>
                            <input type="number" name="price" value="{{$product->price}}" class="form-control">
                        </div>
                        <div class="form-group ">
                            <label for="">Price_sale</label>
                            <input type="number" name="price_sale"value={{$product->price_sale}} class="form-control">
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Danh Mục</label>
                                    <select class="form-control" name="category_id">
                                        @foreach($category as $key => $category)
                                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        <div class="form-group">
            
                        <div class="form-group">
                            <label>Kích Hoạt</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" value="1" type="radio" id="active" name="active" 
                                {{ $product->active == 1 ? 'checked' : '' }}>
                                <label for="active" class="custom-control-label">Có</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" 
                                {{ $product->active == 0 ? 'checked' : '' }}>
                                <label for="no_active" class="custom-control-label">Không</label>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update banner</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection