<div id="call">
    <div class="call">
        <a href="tel:0901257979" class="iconcall">
            <span class="btnCall"></span>Bấm gọi&nbsp;
            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>&nbsp;
            <u class="number_mobile">0901257979</u>
        </a>
    </div>
</div>

<div class="dkGia" onclick="clickcall();">
    <a data-toggle="tooltip" data-placement="left" title="Đăng ký nhận báo giá">
        <i class="fa fa-usd" aria-hidden="true"></i> Nhận báo giá</a>
</div>
<script type="text/javascript">
    function clickcall() {
        jQuery("#clickcall").modal('show');
    }
    // function clickpp() { jQuery("#myModal").modal('show') };
</script>
<div id="clickcall" class="modal fade in" data-easein="flipBounceXIn">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button style="" type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="clickclose2();">
                    <img src="http://thecharmingtoniris.com/wp-content/uploads/2017/10/Crystal_button_cancel.png" />
                </button>
            </div>
            <div class="modal-body">
                <div class="textHead">Điền thông tin để nhận báo giá từ chúng tôi</div>
                <div role="form" class="wpcf7" id="wpcf7-f188-o3" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="{{ route('mail') }}" method="post" class="wpcf7-form"
                     novalidate="novalidate">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="188" />
                            <input type="hidden" name="_wpcf7_version" value="5.0.2" />
                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f188-o3" />
                            <input type="hidden" name="_wpcf7_container_post" value="0" />
                        </div>
                        <div class="form-group">
                            <span class="wpcf7-form-control-wrap ten-kh">
                                <input type="text" name="ten-kh" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Tên của bạn"
                                />
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="wpcf7-form-control-wrap email-kh">
                                <input type="email" name="email-kh" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email"
                                 aria-invalid="false" placeholder="Email của bạn" />
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="wpcf7-form-control-wrap dienthoai">
                                <input type="text" name="dienthoai" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                 aria-required="true" aria-invalid="false" placeholder="Số điện thoại *" />
                            </span>
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
                                <input type="hidden" name="ten-form" value="Popup Báo giá" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden"
                                 aria-invalid="false" />
                            </span>
                        </div>
                        <p>
                            <input type="submit" value="Gửi yêu cầu" class="wpcf7-form-control wpcf7-submit" />
                        </p>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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