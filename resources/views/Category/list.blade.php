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
        @foreach($category as $key => $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                        <img src="{{ asset('/uploads/category/'.$category->image) }}" height="40px">
                    
                </td>
               
                <td>{{ $category->updated_at }}</td>
                <td>
                    <a href="{{ url('admin/category/update/'.$category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td>
                    <form action="{{ url('admin/category/delete/'.$category->id) }}" method="POST">
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


