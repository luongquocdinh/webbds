<!-- Logo -->
<a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>VPL</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b>VuongPhatLand</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu" id="app">
        <ul class="nav navbar-nav">
            {{-- <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                   style="padding-top: 10px;padding-bottom: 5px;">
                    @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                        <img src="{{ asset('admin') }}/images/united-kingdom.png" class="user-image" alt="English"> English (EN)
                    @else
                        <img src="{{ asset('admin') }}/images/vietnam.png" class="user-image" alt="Việt Nam">  Việt Nam (VN)
                    @endif
                </a>
                <ul class="dropdown-menu" style="width: 180px">
                    <li class="header lang" data-lang="vn" style="cursor: pointer;"><img
                                src="{{ asset('admin') }}/images/vietnam.png" class="user-image" alt="Việt Nam"> Việt
                        Nam (VN)
                    </li>
                    <li class="header lang" data-lang="en" style="cursor: pointer;"><img
                                src="{{ asset('admin') }}/images/united-kingdom.png" class="user-image" alt="English">
                        English (EN)
                    </li>
                </ul>
            </li> --}}
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('admin')}}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{ (\Illuminate\Support\Facades\Auth::check()) ? \Illuminate\Support\Facades\Auth::user()->name : null }}</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header" style="height: 120px">
                        <p>
                            Admin - Web Developer
                            <small>Copyright: 2018</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="{{ url('quan-tri/nhan-vien/ho-so') }}"
                               class="btn btn-default btn-flat">Thông Tin</a>
                        </div>
                        <div class="pull-right">
                            <a href="#" class="btn btn-default btn-flat"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('label.sign_out') }}</a>
                        </div>
                        <form id="logout-form" action="#" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
