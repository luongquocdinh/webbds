<div class="ft-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="block-socialFt">
                    <div id="texthtg-3" class="fter">
                        <p>
                            <i class="fa fa-map-o" aria-hidden="true" style="width: 27px;"></i>&nbsp;76 Tôn Thất Thuyết, P. 16, Q. 4, HCM</p>
                        <p>
                            <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Hotline: 0901.257.979</p>
                        {{-- <p>
                            <i class="fa fa-envelope-o" aria-hidden="true" style="width: 27px;font-size: 18px;"></i>&nbsp;
                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="46322e23252e27342b2f28213229282f342f3506212b272f2a6825292b">vuongphat.charmingtoniris@gmail.com</a>
                        </p> --}}
                        <p>
                            <i class="fa fa-envelope-o" aria-hidden="true" style="width: 27px;font-size: 18px;"></i>&nbsp;
                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__">vuongphat.charmingtoniris@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div id="texthtg-11" class="fter">
                    {{-- <p style="text-align: center;">
                        <img src="http://thecharmingtoniris.com/wp-content/uploads/2018/05/cropped-Logo-Iris.png">
                    </p> --}}
                    <p style="text-align: center;">
                        <img src="{{ asset('img') }}/logo.jpg" style="width: 300px; height: 140px;">
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div id="texthtg-4" class="fter">
                    <p>
                        <b style="font-size: 18px;">CHARMINGTON IRIS</b>
                        <br> Toạ lại tại vị trí đắc địa: mặt tiền 76 Tôn Thất Thiết, Quận 4, đây được xem là con đường
                        huyết mạch của Quận 4. bên cạnh các tuyến đường huyết mạch khác như: Bến Vân Đồn, Hoàng Diệu,
                        và Nguyễn Tất Thành. </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="footerArea">
    Copyright © 2017 charmingtonirisvietnam.com. All Right Reserved
</div>

<script data-cfasync="false" src="{{ asset('client') }}/js/email-decode.min.js"></script>
<script type="text/javascript"> 
    function htg_createCookie(name, value) {
        var date = new Date();
        date.setTime(date.getTime() + (60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    function htg_getCookie(name) {
        var dc = document.cookie;
        var prefix = name + "=";
        var begin = dc.indexOf("; " + prefix);
        if (begin == -1) {
            begin = dc.indexOf(prefix);
            if (begin != 0) return null;
        }
        else {
            begin += 2;
            var end = document.cookie.indexOf(";", begin);
            if (end == -1) {
                end = dc.length;
            }
        }
        return unescape(dc.substring(begin + prefix.length, end));
    }

    function clickclose() {
        htg_createCookie('tatPopup', 1);
    }
    /*$('#myModal').on('show.bs.modal', function (e) {
        var anim = $('#entrance').val();
            testAnim(anim);
    })
    $('#myModal').on('hide.bs.modal', function (e) {
        var anim = $('#exit').val();
            testAnim(anim);
    })*/
    function clickclose2() {
    }
</script>