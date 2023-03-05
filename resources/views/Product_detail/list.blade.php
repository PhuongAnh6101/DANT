@extends('main')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Size</th>
            <th>So Luong</th>
            <th>Cập Nhật</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product_detail as $key => $product_detail)
            <tr>
                <td>{{ $product_detail->id }}</td>
                <td>{{ $product_detail->Size }}</td>       
                <td>{{ $product_detail->qty }}</td>
                <td>
                    <a href="{{ url('admin/product_detail/update/'.$product_detail->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td>
                    <form action="{{ url('admin/product_detail/delete/'.$product_detail->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{url('admin/product_detail/create/'.$id)}}"class = "btn btn-primary btn-sm"></a>

@endsection


