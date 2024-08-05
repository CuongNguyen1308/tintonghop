<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Danh mục</div>
    </div>
    <div class="clearfix"></div>
    <div class="fh5co_tags_all">
        @foreach ($cate_view as $item)
            <a href="{{ route('category',$item->slug) }}" class="fh5co_tagg">{{ $item->name }}</a>
        @endforeach

    </div>
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Phổ biến nhất</div>
    </div>
    @foreach ($article_popular as $value)
    <a href="{{ route('detail_article', $value->slug) }}">
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
    </a>
    @endforeach
</div>