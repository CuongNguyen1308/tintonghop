@extends('admin.layouts.master')

@section('content')
    <a href="{{ route('article.index') }}" class="btn btn-primary">Danh sách bài viết</a>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">

                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (!isset($article))
                            @section('title', 'Thêm mới bài viết | 24 News')
                            <h5 class="card-title fw-semibold mb-4">Thêm bài viết</h5>
                            <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                            @else
                            @section('title', 'Cập nhật bài viết | 24 News')
                            <h5 class="card-title fw-semibold mb-4">Cập nhật bài viết</h5>
                            <form action="{{ route('article.update', $article->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Tiêu đề</label>
                        <input type="text" name="name" class="form-control" id="slug"
                            onkeyup="ChangeToSlug()" placeholder="Nhập tên bài viết ..."
                            value="{{ isset($article) ? $article->name : '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Hình ảnh</label> <br>
                        @if (isset($article))
                            <img src="{{ asset('uploads/'.$article->image) }}" width="100px" alt="">
                        @endif
                        <input type="file" name="image" class="form-control" placeholder="Image">
                        <input type="text" name="image_link" class="form-control" placeholder="Link ảnh ..."
                            value="{{ isset($article) ? $article->image : '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tóm tắt</label>
                        <input type="text" name="summary" class="form-control" placeholder="Tóm tắt ..."
                            value="{{ isset($article) ? $article->summary : '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nội dung</label>
                        <textarea type="text" name="content" id="content" class="form-control" placeholder="Nội dung ...">{{ isset($article) ? $article->content : '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Danh mục</label>
                        <select name="category_id" class="form-control" id="">
                            <option value="" hidden>--Chọn--</option>
                            @foreach ($category as $cate)
                                <option value="{{ $cate->id }}"
                                    {{ isset($article) && $cate->id == $article->category_id ? 'selected' : '' }}>
                                    {{ $cate->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tin nóng</label>
                        <select name="is_hot" id="" class="form-control">
                            <option value="0">Không hot</option>
                            <option value="1">Hot</option>
                        </select>
                    </div>
                    @if (!isset($article))
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
