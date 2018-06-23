@php
    $routeRoute = \Illuminate\Support\Facades\Request::route();
    $str = '';
    if ($routeRoute){
        $route = $routeRoute->getName();
        $str = substr($route, 0, strpos($route, '.'));
    }
@endphp
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel" style="height: 40px;">
        <div class="pull-left info">
            <strong>{{ (\Illuminate\Support\Facades\Auth::check()) ? \Illuminate\Support\Facades\Auth::user()->name : null }}</strong>
        </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">THANH QUẢN LÝ</li>
        <li class="treeview">
            <a href="{{ route('main.add') }}">
                <i class="fa fa-dashboard"></i> <span>Thêm bài mới</span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{ route('introduce.index') }}">
                <i class="fa fa-dashboard"></i> <span>Giới thiệu</span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{ route('location.index') }}">
                <i class="fa fa-location-arrow"></i> <span>Vị Trí</span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{ route('utility.index') }}">
                <i class="fa fa-institution"></i> <span>Tiện ích</span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{ route('ground.index') }}">
                <i class="fa fa-object-ungroup"></i> <span>Mặt bằng</span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{ route('models.index') }}">
                <i class="fa fa-home"></i> <span>Nhà mẫu</span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{ route('payment.index') }}">
                <i class="fa fa-cc-visa"></i> <span>Thanh toán</span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{ route('progress.index') }}">
                <i class="fa fa-calendar-check-o"></i> <span>Tiến độ</span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{ route('news.index') }}">
                <i class="fa fa-newspaper-o"></i> <span>Tin tức</span>
            </a>
        </li>
    </ul>
</section>