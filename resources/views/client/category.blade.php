@extends('client.layouts.master')
@section('content')
    <div class=" pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Danh mục: {{ $cate_slug->name }}</div>
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
                <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Danh mục</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="fh5co_tags_all">
                        @foreach ($category as $item)
                            <a href="{{ route('category',$item->slug) }}" class="fh5co_tagg">{{ $item->name }}</a>
                        @endforeach

                    </div>
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Phổ biến nhất</div>
                    </div>
                    @foreach ($article_popular as $value)
                        <div class="row pb-3">
                            <div class="col-5 align-self-center">
                                @php
                                    $img_check = substr($value->image, 0, 5);
                                @endphp
                                @if ($img_check == 'https')
                                    <img src="{{ $value->image }}" alt="" width="" class="fh5co_most_trading">
                                @else
                                    <img src="{{ asset('uploads/' . $value->image) }}" alt=""
                                        class="fh5co_most_trading" width="">
                                @endif
                            </div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font"> {{ $value->name }}
                                </div>
                                <div class="most_fh5co_treding_font_123">
                                    {{ date('d/m/Y', strtotime($value->created_at)) }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <div class=" pb-4 pt-5">
        <div class="container animate-box">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Xu hướng</div>
            </div>
            <div class="owl-carousel owl-theme" id="slider2">
                @foreach ($article_trending as $value)
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img">
                                @php
                                    $img_check = substr($value->image, 0, 5);
                                @endphp
                                @if ($img_check == 'https')
                                    <img src="{{ $value->image }}" alt="" width="">
                                @else
                                    <img src="{{ asset('uploads/' . $value->image) }}" alt="" width="">
                                @endif
                            </div>
                            <div>
                                <a href="#" class="d-block fh5co_small_post_heading"><span
                                        class="">{{ $value->name }}</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i>
                                    {{ date('d/m/Y', strtotime($value->created_at)) }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection
