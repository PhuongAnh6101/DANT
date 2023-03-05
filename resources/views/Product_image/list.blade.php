@extends('main')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Anh</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product_image as $key => $product_image)
            <tr>
                <td>{{ $product_image->id }}</td>
                <td>
                    <img src="{{ asset('uploads/Product_image/'.$product_image->image) }}" height="40px">
                
                </td>
                <td>
                    <form action="{{ url('admin/product_image/delete/'.$product_image->id) }}" method="POST">
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


