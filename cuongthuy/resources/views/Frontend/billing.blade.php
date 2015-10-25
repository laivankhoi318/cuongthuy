@extends('Frontend.layout')
@section('content')
<!-- InstanceBeginEditable name="Content" -->
<div class="title title1">
    <div class="wrap">
        <div class="f_left"><span class="title_red"></span><a href="#">Mua hàng</a></div>
    </div>
    <div class="clear"></div>
</div>
<div class="wrap">
    <div class="steps1_c1">
        <ul>
            <li>
                <p class="big_text active">1</p>
                <div><span class="text_smal">Nhập<br></span><span class="text_bold">Thông tin cá nhân</span></div>
            </li>
            <li>
                <p class="big_text">2</p>
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
    {!! Form::open(array('url' => 'checkout/billing', 'method' => 'post', 'name' => 'billing')) !!}
    <div class="steps1_c2">
        <p class="bs1_bold">Thông tin liên hệ</p>
        <table>
            <tr>
                <td>Họ và tên : </td>
                <td>{!! Form::text('name',(isset($billing['name']) && $billing['name']) ? $billing['name'] : '' ) !!}
                    @if ($errors->has('name')) <p style="color: red">{!! $errors->first('name') !!}</p> @endif
                </td>
            </tr>
            <tr>
                <td>Số điện thoại :</td>
                <td>
                    {!! Form::text('telephone',(isset($billing['telephone']) && $billing['telephone']) ? $billing['telephone'] : '' ) !!}
                    @if ($errors->has('telephone')) <p style="color: red">{!! $errors->first('telephone') !!}</p> @endif
                </td>
            </tr>
            <tr>
                <td>Email :</td>
                <td>
                    {!! Form::text('email',(isset($billing['email']) && $billing['email']) ? $billing['email'] : '' ) !!}
                    @if ($errors->has('email')) <p style="color: red">{!! $errors->first('email') !!}</p> @endif
                </td>
            </tr>
        </table>
        <div class="clear"></div>
        <p class="bs1_bold">Địa chỉ nhận hàng</p>
        <table>
            <tr>
                <td>Số nhà :</td>
                <td>
                    {!! Form::text('houseNumber',(isset($billing['houseNumber']) && $billing['houseNumber']) ? $billing['houseNumber'] : '' ) !!}
                    @if ($errors->has('houseNumber')) <p style="color: red">{!! $errors->first('houseNumber') !!}</p> @endif
                </td>
            </tr>
            <tr>
                <td>Đường / Phố :</td>
                <td>
                    {!! Form::text('street',(isset($billing['street']) && $billing['street']) ? $billing['street'] : '' ) !!}
                    @if ($errors->has('street')) <p style="color: red">{!! $errors->first('street') !!}</p> @endif
                </td>
            </tr>
            <tr>
                <td>Quận / Huyện :</td>
                <td>
                    {!! Form::text('district',(isset($billing['district']) && $billing['district']) ? $billing['district'] : '' ) !!}
                    @if ($errors->has('district')) <p style="color: red">{!! $errors->first('district') !!}</p> @endif
                </td>
            </tr>
            <tr>
                <td>Tỉnh thành :</td>
                <td>
                    <select name="city">
                        <option @if (isset( $billing['city']) && $billing['city'] == "Hà Nội") selected @endif value="Hà Nội">Hà Nội</option>
                        <option @if (isset ($billing['city']) && $billing['city'] == "Tp. Hồ Chí Minh") selected @endif value="Tp. Hồ Chí Minh">Tp. Hồ Chí Minh</option>
                        <option @if (isset ($billing['city']) && $billing['city'] == "Hải Phòng") selected @endif value="Hải Phòng">Hải Phòng</option>
                        <option @if (isset ($billing['city']) && $billing['city'] == "Đà Nẵng") selected @endif value="Đà Nẵng">Đà Nẵng</option>
                    </select>
                </td>
            </tr>
        </table>
        <div class="clear"></div>
        <ul class="bs1_button">
            <li><input type="submit" name="reset" value="Xóa"></li>
            <li><input type="submit" name="submit" value="Hoàn thành"></li>
        </ul>
        <div class="clear"></div>
    </div>
    {!! Form::close() !!}
</div><!-- end wrap-->

<!-- InstanceEndEditable -->
@endsection