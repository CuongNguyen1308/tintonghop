@extends('client.layouts.master')
@section('content')
    <div class=" pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Từ khóa tìm kiếm: {{ $search }}</div>
                    </div>
                    @foreach ($article as $value)
                        <div class="row pb-4">
                            <div class="col-md-5">
                                <div class="fh5co_hover_news_img">
                                    <div class="fh5co_news_img">
                                        @php
                                            $img_check = substr($value->image, 0, 5);
                                        @endphp
                                        @if ($img_check == 'https')
                                            <img src="{{ $value->image }}" alt="" width="">
                                        @else
                                            <img src="{{ asset('uploads/' . $value->image) }}" alt=""
                                                width="">
                                        @endif
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="col-md-7 animate-box">
                                <a href="{{ route('detail_article', $value->slug) }}" class="fh5co_magna py-2">
                                    {{ $value->name }} </a>
                                <a href="{{ route('detail_article', $value->slug) }}" class="fh5co_mini_time py-3">
                                    {{ $value->user->name }} -
                                    {{ date('d/m/Y', strtotime($value->created_at)) }} </a>
                                <div class="fh5co_consectetur"> {{ $value->summary }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="" style="display: flex; justify-content: center;">
                        {!! $article->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
                
                @include('client.layouts.partials.aside')
            </div>

        </div>
    </div>
    @include('client.layouts.partials.trending')
@endsection