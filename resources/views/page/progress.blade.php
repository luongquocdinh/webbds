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
                <a property="item" typeof="WebPage" title="Go to the Charmington Iris category archives." href="{{ route('progress') }}"
                class="taxonomy category">
                    <span property="name">Charmington Iris</span>
                </a>
                <meta property="position" content="2">
            </span> &gt;
            <span property="itemListElement" typeof="ListItem">
                <span property="name">Tiến độ dự án căn hộ Charmington Iris Quận 4</span>
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
            <div class="row">
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
                                <div role="form" class="wpcf7" id="wpcf7-f146-p401-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form action="/tien-do/tien-xay-dung-du-can-ho-charmington-iris-quan-4-thang-102017/#wpcf7-f146-p401-o1" method="post" class="wpcf7-form"
                                    novalidate="novalidate">
                                        <div style="display: none;">
                                            <input type="hidden" name="_wpcf7" value="146" />
                                            <input type="hidden" name="_wpcf7_version" value="5.0.2" />
                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f146-p401-o1" />
                                            <input type="hidden" name="_wpcf7_container_post" value="401" />
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
                                                <input type="hidden" name="link-bai" value="http://thecharmingtoniris.com/tien-do/tien-xay-dung-du-can-ho-charmington-iris-quan-4-thang-102017/"
                                                size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden" aria-invalid="false" />
                                            </span>
                                            <span class="wpcf7-form-control-wrap ngay-thang">
                                                <input type="hidden" name="ngay-thang" value="15-06-2018 00:14:05" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden"
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

                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
                
                <!-- #secondary -->
                @include('partials.right')
            </div>
            <!-- close .row -->
        </div>
        <!-- close .container -->
    </div>
    <!-- close .site-content -->
@endsection