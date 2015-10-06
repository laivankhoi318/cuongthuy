@extends('Frontend.layout')
@section('content')
<!-- InstanceBeginEditable name="Content" -->
<div class="title title1">
    <div class="wrap">
        <div class="f_left"><span class="title_red"></span><a href="#">Hình thức nhận hàng</a></div>
    </div>
    <div class="clear"></div>
</div>
<div class="wrap">
    <div class="steps1_c1">
        <ul>
            <li>
                <p class="big_text">1</p>
                <div><span class="text_smal">Nhập<br></span><span class="text_bold">Thông tin cá nhân</span></div>
            </li>
            <li>
                <p class="big_text active">2</p>
                <div><span class="text_smal">Chọn<br></span><span class="text_bold">Hình thức nhận hàng</span></div>
            </li>
            <li>
                <p class="big_text">3</p>
                <div><span class="text_smal">Xác nhận<br></span><span class="text_bold">Đơn hàng</span></div>
            </li>
        </ul>
        <div class="clear"></div>
    </div><!-- end Steps 1 content-->
    <div class="clear"></div>
    <div class="steps1_c2">
        <ul class="steps2_c">
            <li>
                <label><input type="radio" name="choose1">
                    <p><b>Giao hàng tận nhà (Miễn phí)</b><br>Thời gian giao hàng 1-3 ngày</p>
                </label>
            </li>
            <li>
                <label><input type="radio" name="choose1">
                    <p><b>Giao hàng tận nhà (Miễn phí)</b><br>Thời gian giao hàng 1-3 ngày</p>
                </label>
            </li>
        </ul>
        <div class="clear"></div>
        <ul class="bs1_button">
            <li><a href="#">Quay lại</a></li>
            <li><a href="#">Xác nhận</a></li>
        </ul>
    </div>
</div><!-- end wrap-->
<!-- InstanceEndEditable -->
@endsection