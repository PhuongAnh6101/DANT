@extends('main')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tiêu Đề</th>
            <th>Link</th>
            <th>Ảnh</th>
            <th>Trang Thái</th>
            <th>Cập Nhật</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product as $key => $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>       
                <td>{{ $product->description }}</td>
                <td>{{$product->price}} </td>
                <td>{{$product->price_sale}}</td>
                <td>
                    <a href="{{ url('admin/product_detail/'.$product->id) }}" class="btn btn-primary btn-sm">Product Detail</a>
                </td>
                <td>
                    <a href="{{ url('admin/product_image/'.$product->id) }}" class="btn btn-primary btn-sm">Image</a>
                </td>
                <td>
                    <a href="{{ url('admin/product/update/'.$product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td>
                    <form action="{{ url('admin/product/delete/'.$product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection


