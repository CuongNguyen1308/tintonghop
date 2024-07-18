@extends('admin.layouts.master')

@section('content')
    <a href="{{ route('category.index') }}" class="btn btn-primary">Danh sách danh mục</a>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">

                <div class="card">
                    <div class="card-body">
                        @if (!isset($category))
                        @section('title', 'Thêm mới danh mục | 24 News')
                            <h5 class="card-title fw-semibold mb-4">Thêm danh mục</h5>
                            <form action="{{ route('category.store') }}" method="POST">
                            @else
                            @section('title', 'Cập nhật danh mục | 24 News')
                                <h5 class="card-title fw-semibold mb-4">Cập nhật danh mục</h5>
                                <form action="{{ route('category.update', $category->id) }}" method="POST">
                                @method('PUT')
                        @endif
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="slug"
                                onkeyup="ChangeToSlug()" placeholder="Nhập tên danh mục ..." value="{{ isset($category) ? $category->name : '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Slug</label>
                            <input type="text" name="slug" class="form-control" id="convert_slug" placeholder="Slug" value="{{ isset($category) ? $category->slug : '' }}">
                        </div>
                        @if (!isset($category))
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        @else
                            <button type="submit" class="btn btn-warning">Sửa</button>
                        @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
