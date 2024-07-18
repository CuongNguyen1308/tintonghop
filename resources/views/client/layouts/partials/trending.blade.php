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