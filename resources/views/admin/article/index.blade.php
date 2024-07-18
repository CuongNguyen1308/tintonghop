@extends('admin.layouts.master')
@section('title', 'Danh sách bài viết | 24 News')
@section('content')
    <a href="{{ route('article.create') }}" class="btn btn-primary">Thêm bài viết</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Hình ảnh</th>
                <th>Danh mục</th>
                <th>Người thêm</th>
                <th>Tin nóng</th>
                <th>Lượt xem</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $value->name }}</td>
                    <td>
                        @php
                            $img_check = substr($value->image, 0, 5);
                        @endphp
                        @if ($img_check == 'https')
                            <img src="{{ $value->image }}" alt="" width="100px">
                        @else
                            <img src="{{ asset('uploads/' . $value->image) }}" alt="" width="100px">
                        @endif
                    </td>
                    <td>{{ $value->category->name }}</td>
                    <td>{{ $value->user->name }}</td>
                    <td>
                        @if ($value->is_hot == 0)
                            Không
                        @else
                            Hot
                        @endif
                    </td>
                    <td>{{ $value->view }}</td>
                    <td class="d-flex">
                        <a href="{{ route('article.edit', $value->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('article.destroy', $value->id) }}" method="POST"
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
    <div class="" style="display: flex; justify-content: center;">
        {!! $list->links('pagination::bootstrap-4') !!}
    </div>
@endsection
