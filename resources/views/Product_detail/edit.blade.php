@extends('main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
                <div class="card-body">

                    <form action="{{url('admin/product_detail/update/'.$product_detail->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Size</label>
                            <p>{{$product_detail->Size}}</p>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">So Luong</label>
                            <input type="number" name="qty" value="{{$product_detail->qty}}" class="form-control">
                        </div>
            
                        <div class="form-group">
                            <label>Kích Hoạt</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" value="1" type="radio" id="active" name="active" 
                                {{ $product_detail->active == 1 ? 'checked' : '' }}>
                                <label for="active" class="custom-control-label">Có</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" 
                                {{ $product_detail->active == 0 ? 'checked' : '' }}>
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