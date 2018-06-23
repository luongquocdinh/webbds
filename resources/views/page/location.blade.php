@extends('layouts.main')
@section('content')
    <div class="top-section" id="topsection">
    </div>
    <div id="breadcrumbsDiv">
        <div class="container breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <!-- Breadcrumb NavXT 6.0.4 -->
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Go to Charmington Iris." href="{{ route('home') }}" class="home">
                    <span property="name">Charmington Iris</span>
                </a>
                <meta property="position" content="1">
            </span> &gt;
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Go to the Charmington Iris category archives." href="{{ route('location') }}"
                class="taxonomy category">
                    <span property="name">Charmington Iris</span>
                </a>
                <meta property="position" content="2">
            </span> &gt;
            <span property="itemListElement" typeof="ListItem">
                <span property="name">Vị trí dự án căn hộ Charmington Iris Quận 4</span>
                <meta property="position" content="3">
            </span>
        </div>
    </div>
    <script>
        jQuery(document).ready(function ($) {
            $(document).scroll(function (e) {
                var ads = $("#topsection").offset(); if ($(window).scrollTop() > ads.top) { $("#bgheaderArea").addClass("menuFix2"); }
                else { $("#bgheaderArea").removeClass("menuFix2"); }
            });			
        });
    </script>
    <div id="content" class="site-content  container ">
        <div class=" container  main-content-area">
            <div class=" row  ">
                <div id="contentPost" class="col-md-8">
                    <main id="main" class="site-main" role="main">

                            @if (isset($detail))
                            <article id="post-858" class="post-858 post type-post status-publish format-standard has-post-thumbnail hentry category-charmington-iris tag-ban-can-ho-charmington-iris tag-can-ho-charmington-iris tag-charmington-iris tag-chung-cu-charmington-iris tag-du-an-charmington-iris tag-gioi-thieu-charmington-iris">
                                <header class="entry-header page-header">
                                    <h1 class="entry-title ">{{ $detail->title }}</h1>
                                    <span class="linehome"></span>
                                    <div class="clearfix"></div>
                                </header>
                            
                                {!! base64_decode($detail->content) !!}

                                <script type="text/javascript">

                                    // Javascript to enable link to tab
                                    var url = document.location.toString();
                                    if (url.match('#')) {
                                        jQuery('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
                                    }

                                    // Change hash for page-reload
                                    jQuery('.nav-tabs a').on('shown.bs.tab', function (e) {
                                        window.location.hash = e.target.hash;
                                    })

                                </script>
                            </article>
                        @endif
                        <!-- #post-## -->
                        {{-- <div class="fYeuCau">
                            <h3>Điền thông tin để nhận báo giá trong 5'</h3>
                            <div class="fYeuCauF">
                                <div role="form" class="wpcf7" id="wpcf7-f146-p863-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form action="/charmington-iris/vi-tri-dia-chi-du-an-can-ho-charmington-iris-quan-4/#wpcf7-f146-p863-o1" method="post" class="wpcf7-form"
                                    novalidate="novalidate">
                                        <div style="display: none;">
                                            <input type="hidden" name="_wpcf7" value="146" />
                                            <input type="hidden" name="_wpcf7_version" value="5.0.2" />
                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f146-p863-o1" />
                                            <input type="hidden" name="_wpcf7_container_post" value="863" />
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <span class="wpcf7-form-control-wrap ten-kh">
                                                    <input type="text" name="ten-kh" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required="true" aria-invalid="false" placeholder="Tên" />
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <span class="wpcf7-form-control-wrap dienthoai">
                                                    <input type="text" name="dienthoai" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required="true" aria-invalid="false" placeholder="Số điện thoại" />
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <span class="wpcf7-form-control-wrap email-kh">
                                                    <input type="email" name="email-kh" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                    aria-required="true" aria-invalid="false" placeholder="Email" />
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <label>
                                                <span class="wpcf7-form-control-wrap yeu-cau">
                                                    <textarea name="yeu-cau" cols="400" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                                    placeholder="Yêu cầu thêm (nếu có)"></textarea>
                                                </span>
                                            </label>
                                            <span class="wpcf7-form-control-wrap link-bai">
                                                <input type="hidden" name="link-bai" value="http://thecharmingtoniris.com/charmington-iris/vi-tri-dia-chi-du-an-can-ho-charmington-iris-quan-4/"
                                                size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden" aria-invalid="false" />
                                            </span>
                                            <span class="wpcf7-form-control-wrap ngay-thang">
                                                <input type="hidden" name="ngay-thang" value="14-06-2018 00:02:05" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden"
                                                aria-invalid="false" />
                                            </span>
                                            <span class="wpcf7-form-control-wrap ip-khach-hang">
                                                <input type="hidden" name="ip-khach-hang" value="42.119.237.35" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden"
                                                aria-invalid="false" />
                                            </span>
                                            <span class="wpcf7-form-control-wrap ten-form">
                                                <input type="hidden" name="ten-form" value="Footer Bài Viết" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden"
                                                aria-invalid="false" />
                                            </span>
                                        </div>
                                        <p align="center">
                                            <input type="submit" value="Gửi yêu cầu" class="wpcf7-form-control wpcf7-submit" />
                                        </p>
                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                        <div class="tukhoa">
                        </div>

                        <div class="clearfix"></div>
                        {{-- <div id="related_posts">
                            <h5>
                                <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Tin liên quan</h5>
                            <ul>
                                <div id="post-875" class="arcpost col-md-4 blogNew">
                                    <div class="">
                                        <div class="newsimage col-md-12">
                                            <a href="http://thecharmingtoniris.com/charmington-iris/tin-tuc-du-an-charmington-iris/">
                                                <img src="http://thecharmingtoniris.com/wp-content/uploads/2017/10/tin-tuc-du-an-can-ho-chung-cu-charmington-irris-quan-4-300x228.jpg"
                                                />
                                            </a>
                                        </div>
                                        <div class="content-news col-md-12">
                                            <div class="blogNewSub">
                                                <time>
                                                    <div class="date">06</div>
                                                    <div class="month">Tháng 03</div>
                                                </time>
                                                <h2 class="newsname">
                                                    <a href="http://thecharmingtoniris.com/charmington-iris/tin-tuc-du-an-charmington-iris/" target="_self" title="TIN TỨC DỰ ÁN CHARMINGTON IRIS">TIN TỨC DỰ ÁN CHARMINGTON IRIS</a>
                                                </h2>
                                                <div class="newsdes">
                                                    <p>Tin tức dự án căn hộ Charmington Iris Quận 4 và tin tức thị trường định hướng quy hoạch ...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div id="post-873" class="arcpost col-md-4 blogNew">
                                    <div class="">
                                        <div class="newsimage col-md-12">
                                            <a href="http://thecharmingtoniris.com/charmington-iris/charmington-iris-tien-xay-dung/">
                                                <img src="http://thecharmingtoniris.com/wp-content/uploads/2017/10/tien-do-xay-dung-du-an-can-ho-charmington-iris-quan-04-chu-dau-tu-ttcland-300x228.jpg"
                                                />
                                            </a>
                                        </div>
                                        <div class="content-news col-md-12">
                                            <div class="blogNewSub">
                                                <time>
                                                    <div class="date">06</div>
                                                    <div class="month">Tháng 03</div>
                                                </time>
                                                <h2 class="newsname">
                                                    <a href="http://thecharmingtoniris.com/charmington-iris/charmington-iris-tien-xay-dung/" target="_self" title="CHARMINGTON IRIS TIẾN ĐỘ XÂY DỰNG">CHARMINGTON IRIS TIẾN ĐỘ XÂY DỰNG</a>
                                                </h2>
                                                <div class="newsdes">
                                                    <p>Tiến độ xây dựng dự án că...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div id="post-871" class="arcpost col-md-4 blogNew">
                                    <div class="">
                                        <div class="newsimage col-md-12">
                                            <a href="http://thecharmingtoniris.com/charmington-iris/charmington-iris-phuong-thuc-thanh-toan/">
                                                <img src="http://thecharmingtoniris.com/wp-content/uploads/2017/10/phuong-thuc-thanh-toan-va-uu-dai-mua-du-an-can-ho-chung-cu-charmington-iris-quan-4-300x228.jpg"
                                                />
                                            </a>
                                        </div>
                                        <div class="content-news col-md-12">
                                            <div class="blogNewSub">
                                                <time>
                                                    <div class="date">06</div>
                                                    <div class="month">Tháng 03</div>
                                                </time>
                                                <h2 class="newsname">
                                                    <a href="http://thecharmingtoniris.com/charmington-iris/charmington-iris-phuong-thuc-thanh-toan/" target="_self" title="CHARMINGTON IRIS PHƯƠNG THỨC THANH TOÁN">CHARMINGTON IRIS PHƯƠNG THỨC THANH TOÁN</a>
                                                </h2>
                                                <div class="newsdes">
                                                    <p>Phương thức thanh toán dự án căn hộ chung cư Charmington Iris Quận 4 sẽ được cập nhập liê...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div id="post-869" class="arcpost col-md-4 blogNew">
                                    <div class="">
                                        <div class="newsimage col-md-12">
                                            <a href="http://thecharmingtoniris.com/charmington-iris/thiet-ke-nha-mau-charmington-iris/">
                                                <img src="http://thecharmingtoniris.com/wp-content/uploads/2017/10/dia-chi-nha-mau-can-ho-chung-cu-lancaster-lincoln-quan-4-300x228.jpg"
                                                />
                                            </a>
                                        </div>
                                        <div class="content-news col-md-12">
                                            <div class="blogNewSub">
                                                <time>
                                                    <div class="date">06</div>
                                                    <div class="month">Tháng 03</div>
                                                </time>
                                                <h2 class="newsname">
                                                    <a href="http://thecharmingtoniris.com/charmington-iris/thiet-ke-nha-mau-charmington-iris/" target="_self" title="THIẾT KẾ NHÀ MẪU CHARMINGTON IRIS">THIẾT KẾ NHÀ MẪU CHARMINGTON IRIS</a>
                                                </h2>
                                                <div class="newsdes">
                                                    <p>Nhà mẫu dự án căn hộ Charmington Iris Quận 4 được đầu tư thiết kế kỹ lưỡng và chăm chú...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div id="post-867" class="arcpost col-md-4 blogNew">
                                    <div class="">
                                        <div class="newsimage col-md-12">
                                            <a href="http://thecharmingtoniris.com/charmington-iris/thiet-ke-mat-bang-can-ho-charmington-iris-quan-4-2/">
                                                <img src="http://thecharmingtoniris.com/wp-content/uploads/2017/10/mat-bang-thiet-ke-tang-1-du-can-can-ho-chung-cu-charmington-quan-4-300x229.jpg"
                                                />
                                            </a>
                                        </div>
                                        <div class="content-news col-md-12">
                                            <div class="blogNewSub">
                                                <time>
                                                    <div class="date">06</div>
                                                    <div class="month">Tháng 03</div>
                                                </time>
                                                <h2 class="newsname">
                                                    <a href="http://thecharmingtoniris.com/charmington-iris/thiet-ke-mat-bang-can-ho-charmington-iris-quan-4-2/" target="_self"
                                                    title="Thiết kế &#038; mặt bằng căn hộ Charmington Iris Quận 4">Thiết kế &#038; mặt bằng căn hộ Charmington Iris Quận 4</a>
                                                </h2>
                                                <div class="newsdes">
                                                    <p>[tabby title = "MẶT BẰNG CĂN HỘ"] [caption id="attachment_215" align="aligncenter" width="1100"]</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div id="post-865" class="arcpost col-md-4 blogNew">
                                    <div class="">
                                        <div class="newsimage col-md-12">
                                            <a href="http://thecharmingtoniris.com/charmington-iris/tien-ich-du-an-can-ho-charmington-iris-quan-4/">
                                                <img src="http://thecharmingtoniris.com/wp-content/uploads/2017/10/phong-tap-gym-du-an-can-ho-chung-cu-charmington-iris-quan-4-300x228.jpg"
                                                />
                                            </a>
                                        </div>
                                        <div class="content-news col-md-12">
                                            <div class="blogNewSub">
                                                <time>
                                                    <div class="date">06</div>
                                                    <div class="month">Tháng 03</div>
                                                </time>
                                                <h2 class="newsname">
                                                    <a href="http://thecharmingtoniris.com/charmington-iris/tien-ich-du-an-can-ho-charmington-iris-quan-4/" target="_self" title="Tiện ích dự án căn hộ Charmington Iris Quận 4">Tiện ích dự án căn hộ Charmington Iris Quận 4</a>
                                                </h2>
                                                <div class="newsdes">
                                                    <p>Tiện ích căn hộ Charmington Iris được tập đoàn TTC Land đầu tư tỷ mỹ ...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </ul>
                        </div> --}}
                        <div class="clearfix"></div>
                    </main>
                    <!-- #main -->
                </div>
                @include('partials.right')
            </div>
        </div>
        <!-- close .row -->
    </div>
    <!-- close .container -->
    </div>
    <!-- close .site-content -->
@endsection