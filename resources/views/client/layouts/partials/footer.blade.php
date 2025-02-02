<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5"><img src="{{ asset('theme/client/images/white_logo.png') }}" alt="img"
                    class="footer_logo" />
            </div>
            <div class="clearfix"></div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="footer_main_title py-3"> Về chúng tôi</div>
                <div class="footer_sub_about pb-3">
                    Lorem Ipsum chỉ đơn giản là văn bản giả của việc in ấn và sắp chữ
                    ngành công nghiệp. Lorem Ipsum đã trở thành văn bản giả tiêu chuẩn của ngành kể từ những năm 1500,
                    khi một
                    một nhà in không xác định đã lấy một bản in và xáo trộn nó để tạo thành một cuốn sách mẫu.
                </div>
                <div class="footer_mediya_icon">
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                        </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                        </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                        </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                        </a></div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="footer_main_title py-3"> Danh mục</div>
                <ul class="footer_menu">
                    @foreach ($cate_view->take(8) as $value)
                        <li><a href="{{ route('category', $value->slug) }}" class=""><i
                                    class="fa fa-angle-right"></i>&nbsp;&nbsp; {{ $value->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                <div class="footer_main_title py-3"> Bài viết được xem nhiều nhất</div>
                @foreach ($article_popular->take(3) as $value)
                    <div class="footer_makes_sub_font"> {{ date('d/m/Y', strtotime($value->created_at)) }}</div>
                    <a href="{{ route('detail_article', $value->slug) }}" class="footer_post pb-4"> {{ $value->name }} </a>
                @endforeach
                <div class="footer_position_absolute"><img src="{{ asset('theme/client/images/footer_sub_tipik.png') }}"
                        alt="img" class="width_footer_sub_img" /></div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="footer_main_title py-3"> Bài viết được sửa đổi lần cuối</div>
                <a href="#" class="footer_img_post_6"><img
                        src="{{ asset('theme/client/images/allef-vinicius-108153.jpg') }}" alt="img" /></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('theme/client/images/32-450x260.jpg') }}"
                        alt="img" /></a>
                <a href="#" class="footer_img_post_6"><img
                        src="{{ asset('theme/client/images/download (1).jpg') }}" alt="img" /></a>
                <a href="#" class="footer_img_post_6"><img
                        src="{{ asset('theme/client/images/science-578x362.jpg') }}" alt="img" /></a>
                <a href="#" class="footer_img_post_6"><img
                        src="{{ asset('theme/client/images/vil-son-35490.jpg') }}" alt="img" /></a>
                <a href="#" class="footer_img_post_6"><img
                        src="{{ asset('theme/client/images/zack-minor-15104.jpg') }}" alt="img" /></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('theme/client/images/download.jpg') }}"
                        alt="img" /></a>
                <a href="#" class="footer_img_post_6"><img
                        src="{{ asset('theme/client/images/download (2).jpg') }}" alt="img" /></a>
                <a href="#" class="footer_img_post_6"><img
                        src="{{ asset('theme/client/images/ryan-moreno-98837.jpg') }}" alt="img" /></a>
            </div>
        </div>
        <div class="row justify-content-center pt-2 pb-4">
            <div class="col-12 col-md-8 col-lg-7 ">
                <div class="input-group">
                    <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i
                            class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control fh5co_footer_text_box" placeholder="Nhập email của bạn..."
                        aria-describedby="basic-addon1">
                    <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i
                            class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Gửi</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2024</div>
            <div class="col-12 col-md-6 spdp_right py-4">
                <a href="#" class="footer_last_part_menu">Trang chủ</a>
                <a href="Contact_us.html" class="footer_last_part_menu">Giới thiệu</a>
                <a href="Contact_us.html" class="footer_last_part_menu">Liên hệ</a>
                <a href="blog.html" class="footer_last_part_menu">Tin tức mới nhất</a>
            </div>
        </div>
    </div>
</div>
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>
