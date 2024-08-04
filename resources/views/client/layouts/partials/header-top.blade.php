{{-- <div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                        class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;Friday, 5 January 2018</a>
                <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#"
                        class="treding_btn">Trending</a>
                    <div class="fh5co_treding_position_absolute"></div>
                </div>
                <a href="#" class="color_fff fh5co_mediya_setting">Instagram’s big redesign goes live with
                    black-and-white app</a>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
                <img src="{{ asset('theme/client/images/logo.png') }}" alt="img" class="fh5co_logo_width" />
            </div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="text-center d-inline-block">
                    <form action="{{ route('tim-kiem') }}" method="GET">
                        <div class="d-flex">
                            <input type="text" class="form-control" name="search" placeholder="Tìm kiếm...">
                            <button class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div>
                            </button>
                        </div>
                    </form>

                </div>
                <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->

                @if (Auth::check())
                    <div class="d-inline-block text-center dd_position_relative ">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="form-control fh5co_text_select_option" type="submit">{{ Auth::user()->name }}</button>
                        </form>
                    </div>
                @else
                    <div class="d-inline-block text-center dd_position_relative ">
                        <a href="{{ route('login') }}" class="form-control fh5co_text_select_option">Đăng nhập</a>
                    </div>
                @endif
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
