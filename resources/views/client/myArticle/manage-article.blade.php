@extends('client.layouts.master')
@section('title')
    Quản lý bài viết | 24 News
@endsection
@section('content')
    <div class=" pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="mx-0">
                <h2>Quản lý bài viết</h2>
                <a href="{{ route('add_article') }}" class="btn btn-primary">Thêm bài viết</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Hình ảnh</th>
                            <th>Danh mục</th>
                            <th>Tin nóng</th>
                            <th>Lượt xem</th>
                            <th>Ngày đăng</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_article as $key => $value)
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
                                <td>
                                    @if ($value->is_hot == 0)
                                        Không
                                    @else
                                        Hot
                                    @endif
                                </td>
                                <td>{{ $value->view }}</td>
                                <td>{{ $value->created_at }}</td>
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
                    {!! $list_article->links('pagination::bootstrap-4') !!}
                </div>
            </div>
        </div>
    </div>
@endsection
