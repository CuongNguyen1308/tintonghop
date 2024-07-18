@extends('client.layouts.master')
@section('content')
    {{-- <div id="fh5co-title-box"
        style="background-image: url({{ asset('theme/client/images/camila-cordeiro-114636.jpg') }}); background-position: 50% 90.5px;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="page-title">
            <img src="images/person_1.jpg" alt="Free HTML5 by FreeHTMl5.co">
            <span>January 1, 2018</span>
            <h2>How to write interesting articles</h2>
        </div>
    </div> --}}
    <div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <h5><strong>{{ $detail_article->name }}</strong></h5>
                    {!! $detail_article->content !!}
                </div>
                @include('client.layouts.partials.aside')
            </div>
        </div>
    </div>
    @include('client.layouts.partials.trending')
@endsection
