@extends('main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tiêu Đề</th>
            <th>Link</th>
            <th>Ảnh</th>
            <th>Thứ tự</th>
            <th>Trang Thái</th>
            <th>Cập Nhật</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($banner as $key => $banner)
            <tr>
                <td>{{ $banner->id }}</td>
                <td>{{ $banner->name }}</td>
                <td>{{ $banner->url }}</td>
                <td>
                        <img src="{{ asset('uploads/Banner/'.$banner->image) }}" height="40px">
                    
                </td>
                <td>{{ $banner->sort_by }}</td>
               <td>{{$banner->active}}</td>
                
                <td>
                    <a href="{{ url('admin/banner/update/'.$banner->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td>
                    <form action="{{ url('admin/banner/delete/'.$banner->id) }}" method="POST">
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


