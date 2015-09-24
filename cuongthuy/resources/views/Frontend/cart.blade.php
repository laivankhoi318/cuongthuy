@extends('Frontend.layout')
@section('content')
<!-- InstanceBeginEditable name="Content" -->
<div class="title title1">
    <div class="wrap">
        <div class="f_left"><span class="title_red"></span><a href="#">Giỏ hàng</a></div>
    </div>
    <div class="clear"></div>
</div>
<div class="wrap cart_page">
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã Sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Hình ảnh sản phẩm</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php $totalPrice = 0 ?>
            @foreach($products as $product)
            <?php $linePrice = $product->product_price * $_SESSION['cart'][$product->product_id] ?>
            <?php $totalPrice += $linePrice ?>
            <tr>
                <td class="product_id">{!! $product->product_id !!}</td>
                <td>{!! $product->product_code !!}</td>
                <td>{!! $product->product_name !!}</td>
                <td>
                    <input type='text' name='quantity[{!!$product->product_id!!}]' size='5' value="{!! $_SESSION['cart'][$product->product_id] !!}" />
                </td>
                <td>
                    <img src="public/images/upload/products/{!! $product->product_image !!}">
                </td>
                <td>{!! $product->product_price!!}</td>
                <td class="line_price">{!! $linePrice !!}</td>
                <td><button></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="cart_c2">
        <p class="f_left total_price">Tổng tiền : {!!$totalPrice!!}đ</p>
        <a href="#" class="f_right"><button>Mua hàng</button></a>
    </div>
</div><!-- end cart page-->
<div class="clear"></div>

<div class="slide">
    <div class="title5">
        <h2 class="wrap">Sản phẩm khác</h2>
    </div>
    <div class="wrap">
        <ul class="owl-demo owl-carousel">
            <li>
                <a href="#"><img src="public/images/upload/products/img9.jpg"></a>
                <p><a href="#">Bỉm Pamper dành cho trẻ em</a></p>
            </li>
            <li>
                <a href="#"><img src="public/images/upload/products/img9.jpg"></a>
                <p><a href="#">Bỉm Pamper dành cho trẻ em</a></p>
            </li>
            <li>
                <a href="#"><img src="public/images/upload/products/img9.jpg"></a>
                <p><a href="#">Bỉm Pamper dành cho trẻ em</a></p>
            </li>
            <li>
                <a href="#"><img src="public/images/upload/products/img9.jpg"></a>
                <p><a href="#">Bỉm Pamper dành cho trẻ em</a></p>
            </li>
            <li>
                <a href="#"><img src="public/images/upload/products/img9.jpg"></a>
                <p><a href="#">Bỉm Pamper dành cho trẻ em</a></p>
            </li>
            <li>
                <a href="#"><img src="public/images/upload/products/img9.jpg"></a>
                <p><a href="#">Bỉm Pamper dành cho trẻ em</a></p>
            </li>
        </ul>
    </div>
</div><!-- end slide-->
<!-- InstanceEndEditable -->
@endsection
@section('javascript')

<script type="text/javascript">
    $(document).ready(function() {
        $("input").change(function() {
            var quantity = $(this).val();
            $.ajax({
                url : 'updateCart',
                type : 'post',
//                dataType: 'json',
                data : {
                    quantity : quantity,
                    promotionId : 1,
                    
                },
                success : function (result){
                    $('.line_price').html(result['linePrice']);
                    $('.total_price').html(result['totalPrice']);
                }
            });
            
        });
    });
</script>
@endsection