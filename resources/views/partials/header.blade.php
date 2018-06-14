<div id="headerArea">
    <div class="container">
        <div class="col-md-3" style="padding-right:0;">
            <div id="logo">
                <a href="{{ route('home') }}">
                    <img src="http://thecharmingtoniris.com/wp-content/uploads/2018/05/cropped-Logo-Iris.png" height="140"
                        width="300" alt="Charmington Iris" />
                </a>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img') }}/logo.jpg" height="160"
                        width="300" alt="Charmington Iris" />
                </a>
            </div>
            <!-- end of #logo -->
        </div>
        <div class="col-md-9 header1">
            <div class="infoTopRight">
                <div class="ls-controls">
                    <div class="social-list">
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://www.youtube.com/" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </div>
                    <div class="top-search"></div>
                </div>
            </div>
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div id="menuTop">
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul id="menu-mainmenu" class="nav navbar-nav">
                                <li id="menu-item-185" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-106 current_page_item menu-item-185 active">
                                    <a title="HOME" href="{{ route('home') }}">HOME</a>
                                </li>
                                <li id="menu-item-197" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-197">
                                    <a title="GIỚI THIỆU" href="{{ route('introduce') }}">GIỚI THIỆU</a>
                                </li>
                                <li id="menu-item-174" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174">
                                <a title="VỊ TRÍ" href="{{ route('location') }}">VỊ TRÍ</a>
                                </li>
                                <li id="menu-item-172" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-172">
                                    <a title="TIỆN ÍCH" href="{{ route('utility') }}">TIỆN ÍCH</a>
                                </li>
                                <li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7">
                                <a title="MẶT BẰNG" href="{{ route('ground') }}">MẶT BẰNG</a>
                                </li>
                                <li id="menu-item-350" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-350">
                                <a title="NHÀ MẪU" href="{{ route('models') }}">NHÀ MẪU</a>
                                </li>
                                <li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8">
                                    <a title="THANH TOÁN" href="{{ route('payment') }}">THANH TOÁN</a>
                                </li>
                                <li id="menu-item-165" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-165">
                                    <a title="TIẾN ĐỘ" href="{{ route('progress') }}">TIẾN ĐỘ</a>
                                </li>
                                {{-- <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9">
                                    <a title="TIN TỨC" href="http://thecharmingtoniris.com/tin-tuc/">TIN TỨC</a>
                                </li>
                                <li id="menu-item-457" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-457">
                                    <a title="LIÊN HỆ" href="http://thecharmingtoniris.com/bai-viet/lien-he/">LIÊN HỆ</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- .site-navigation -->

        </div>
        <div class="clearfix"></div>

    </div>
    <div class="clearfix"></div>
</div>