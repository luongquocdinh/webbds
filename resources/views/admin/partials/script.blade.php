<!-- jQuery 2.2.3 -->
<script src="{{ asset('admin') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('admin') }}/bootstrap/js/bootstrap.min.js"></script>
{{--<script src="/js/app.js"></script>--}}
<!-- SlimScroll -->
<script src="{{ asset('admin') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('admin') }}/plugins/fastclick/fastclick.js"></script>

<script>
    var BASE_URL = '{{url('')}}';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@yield('script')

<script src="{{asset('js')}}/my_script.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin') }}/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin') }}/dist/js/demo.js"></script>

<script>
    /*menu handler*/
    $(function(){
    function stripTrailingSlash(str) {
        if(str.substr(-1) == '/') {
        return str.substr(0, str.length - 1);
        }
        return str;
    }

    var url = window.location.pathname;  
    var activePage = stripTrailingSlash(url);

    $('.nav li a').each(function(){  
        var currentPage = stripTrailingSlash($(this).attr('href'));

        if (activePage == currentPage) {
        $(this).parent().addClass('active'); 
        } 
    });
    });
</script>