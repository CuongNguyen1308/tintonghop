@extends('client.layouts.master')
@section('content')
    <div class="container-fluid paddding mb-5">
        <div class="row mx-0">
            <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
                <div class="fh5co_suceefh5co_height">
                    @php
                        $img_check = substr($article_banner[0]->image, 0, 5);
                    @endphp
                    @if ($img_check == 'https')
                        <img src="{{ $article_banner[0]->image }}" alt="" width="">
                    @else
                        <img src="{{ asset('uploads/' . $article_banner[0]->image) }}" alt="" width="">
                    @endif
                    <div class="fh5co_suceefh5co_height_position_absolute"></div>
                    <div class="fh5co_suceefh5co_height_position_absolute_font">
                        <div class=""><a href="#" class="color_fff"> <i
                                    class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ date('d/m/Y', strtotime($article_banner[0]->created_at)) }}
                            </a></div>
                        <div class=""><a href="{{ route('detail_article', $article_banner[0]->slug) }}"
                                class="fh5co_good_font"> {{ $article_banner[0]->name }} </a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2">
                            @php
                                $img_check = substr($article_banner[1]->image, 0, 5);
                            @endphp
                            @if ($img_check == 'https')
                                <img src="{{ $article_banner[1]->image }}" alt="" width="">
                            @else
                                <img src="{{ asset('uploads/' . $article_banner[1]->image) }}" alt=""
                                    width="">
                            @endif
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                <div class=""><a href="#" class="color_fff"> <i
                                            class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ date('d/m/Y', strtotime($article_banner[1]->created_at)) }}</a>
                                </div>
                                <div class=""><a href="{{ route('detail_article', $article_banner[1]->slug) }}"
                                        class="fh5co_good_font_2"> {{ $article_banner[1]->name }} </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2">
                            @php
                                $img_check = substr($article_banner[2]->image, 0, 5);
                            @endphp
                            @if ($img_check == 'https')
                                <img src="{{ $article_banner[2]->image }}" alt="" width="">
                            @else
                                <img src="{{ asset('uploads/' . $article_banner[2]->image) }}" alt=""
                                    width="">
                            @endif
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                <div class=""><a href="#" class="color_fff"> <i
                                            class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ date('d/m/Y', strtotime($article_banner[2]->created_at)) }}
                                    </a></div>
                                <div class=""><a href="{{ route('detail_article', $article_banner[2]->slug) }}"
                                        class="fh5co_good_font_2"> {{ $article_banner[2]->name }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2">
                            @php
                                $img_check = substr($article_banner[3]->image, 0, 5);
                            @endphp
                            @if ($img_check == 'https')
                                <img src="{{ $article_banner[3]->image }}" alt="" width="">
                            @else
                                <img src="{{ asset('uploads/' . $article_banner[3]->image) }}" alt=""
                                    width="">
                            @endif
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                <div class=""><a href="#" class="color_fff"> <i
                                            class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ date('d/m/Y', strtotime($article_banner[3]->created_at)) }}
                                    </a></div>
                                <div class=""><a href="{{ route('detail_article', $article_banner[3]->slug) }}"
                                        class="fh5co_good_font_2">{{ $article_banner[3]->name }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2">
                            @php
                                $img_check = substr($article_banner[4]->image, 0, 5);
                            @endphp
                            @if ($img_check == 'https')
                                <img src="{{ $article_banner[4]->image }}" alt="" width="">
                            @else
                                <img src="{{ asset('uploads/' . $article_banner[4]->image) }}" alt=""
                                    width="">
                            @endif
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                <div class=""><a href="#" class="color_fff"> <i
                                            class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ date('d/m/Y', strtotime($article_banner[4]->created_at)) }}</a>
                                </div>
                                <div class=""><a href="{{ route('detail_article', $article_banner[4]->slug) }}"
                                        class="fh5co_good_font_2"> {{ $article_banner[4]->name }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-3">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Xu hướng</div>
            </div>
            <div class="owl-carousel owl-theme js" id="slider1">
                @foreach ($article_trending as $value)
                    <div class="item px-2">
                        <div class="fh5co_latest_trading_img_position_relative">
                            <div class="fh5co_latest_trading_img">
                                @php
                                    $img_check = substr($value->image, 0, 5);
                                @endphp
                                @if ($img_check == 'https')
                                    <img src="{{ $value->image }}" alt="" width="">
                                @else
                                    <img src="{{ asset('uploads/' . $value->image) }}" alt="" width="">
                                @endif
                            </div>
                            <div class="fh5co_latest_trading_img_position_absolute"></div>
                            <div class="fh5co_latest_trading_img_position_absolute_1">
                                <a href="{{ route('detail_article', $value->slug) }}" class="text-white">
                                    {{ $value->name }} </a>
                                <div class="fh5co_latest_trading_date_and_name_color"> {{ $value->user->name }} -
                                    {{ date('d/m/Y', strtotime($value->created_at)) }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid pb-4 pt-5">
        <div class="container animate-box">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tin mới</div>
            </div>
            <div class="owl-carousel owl-theme" id="slider2">

                @foreach ($article_new as $value)
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
                                <a href="{{ route('detail_article', $value->slug) }}"
                                    class="d-block fh5co_small_post_heading"><span
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
    {{-- <div class="container-fluid fh5co_video_news_bg pb-4">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4 ">Video News</div>
            </div>
            <div>
                <div class="owl-carousel owl-theme" id="slider3">
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                    <iframe id="video" width="100%" height="200"
                                        src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide">
                                    <img src="images/ariel-lustre-208615.jpg" alt="" />
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide"
                                    id="play-video">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">The top 10 funniest videos on YouTube </span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                    <iframe id="video_2" width="100%" height="200"
                                        src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_2">
                                    <img src="images/39-324x235.jpg" alt="" />
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_2"
                                    id="play-video_2">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">The top 10 embedded YouTube videos this month</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                    <iframe id="video_3" width="100%" height="200"
                                        src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_3">
                                    <img src="images/joe-gardner-75333.jpg" alt="" />
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_3"
                                    id="play-video_3">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">The top 10 best computer speakers in the market</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                    <iframe id="video_4" width="100%" height="200"
                                        src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_4">
                                    <img src="images/vil-son-35490.jpg" alt="" />
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_4"
                                    id="play-video_4">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">The top 10 best computer speakers in the market</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tin hot</div>
                    </div>
                    @foreach ($article_hot as $value)
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
                                    {{ $value->name }} </a> <a href="" class="fh5co_mini_time py-3">
                                    {{ $value->user->name }} - {{ date('d/m/Y', strtotime($value->created_at)) }} </a>
                                <div class="fh5co_consectetur"> {{ $value->summary }}
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                @include('client.layouts.partials.aside')
            </div>
            {{-- <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
                <div class="col-12 text-center pb-4 pt-4">
                    <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp;
                        Previous</a>
                    <a href="#" class="btn_pagging">1</a>
                    <a href="#" class="btn_pagging">2</a>
                    <a href="#" class="btn_pagging">3</a>
                    <a href="#" class="btn_pagging">...</a>
                    <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp;
                    </a>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
