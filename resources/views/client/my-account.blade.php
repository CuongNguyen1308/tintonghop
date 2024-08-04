@extends('client.layouts.master')
@section('title')
    Tài khoản của tôi | 24 News
@endsection
@section('content')
    <div class=" pb-4 pt-4 paddding">
        <div class="container paddding">
            <h3 class="">Thông tin người dùng</h3>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <label for="">Tên người dùng</label>
                    <input type="text" value="{{ $account->name }}" class="form-control" disabled>
                </div>
                <div class="col-md-6">
                    <label for="">Email</label>
                    <input type="text" value="{{ $account->email }}" class="form-control" disabled>
                </div>
            </div>
            <div class="row mx-1 my-3 d-flex">
                <a href="{{ route('dashboard') }}" class="btn btn-outline-danger mr-2">Vào trang quản lý</a>
                <a href="{{ route('manage_article') }}" class="btn btn-outline-success mr-2">Bài viết</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-outline-primary" type="submit">Đăng xuất</button>
                </form>
            </div>
        </div>
    </div>
@endsection
