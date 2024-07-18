@extends('admin.layouts.master')
@section('title', 'Danh sách danh mục | 24 News')
@section('content')
    <a href="{{ route('category.create') }}" class="btn btn-primary">Thêm danh mục</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Slug</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->slug }}</td>
                    <td class="d-flex">
                        <a href="{{ route('category.edit', $value->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('category.destroy', $value->id) }}" method="POST"
                            onsubmit="return confirm('Bạn có muốn xóa không?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
