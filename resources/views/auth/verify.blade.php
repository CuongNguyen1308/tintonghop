@extends('client.layouts.master')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vui lòng xác minh địa chỉ email của bạn') }}</div>

                <div class="card-body p-4">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Một liên kết xác minh mới đã được gửi tới địa chỉ email của bạn.') }}
                        </div>
                    @endif

                    {{ __('Trước khi tiếp tục, vui lòng kiểm tra email để biết liên kết xác minh.') }}
                    {{ __('Nếu bạn không nhận được email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('nhấn vào đây để tạo một mã mới') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
