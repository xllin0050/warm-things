@extends('layouts.template')

@section('css')
{{-- fontawesome --}}
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="{{ asset('css/07-checkout.css') }}">
@endsection

@section('main')
<h1>我的購物車</h1>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">圖片</label>
    <label class="product-details">商品</label>
    <label class="product-price">價格</label>
    <label class="product-quantity">數量</label>
    <label class="product-removal">刪除</label>
    <label class="product-line-price">小計</label>
  </div>


@foreach ($carts as $cart)
<?php $product = App\Product::find($cart->id);?>
<div class="product">
  <div class="product-image">
    <img src="{{$product->img}}">
  </div>
  <div class="product-details">
    <div class="product-title">{{$product->name}}</div>
  </div>
  <div class="product-price" data-price="{{$product->price}}">{{number_format($product->price)}}</div>
  <div class="product-quantity">
    <input type="number" value="{{$cart->quantity}}" min="1" data-id="{{$cart->id}}" required>
  </div>
  <div class="product-removal">
    <button class="remove-product" data-id="{{$cart->id}}">
        <i class="far fa-trash-alt"></i>
    </button>
  </div>
  <div class="product-line-price" data-price="{{$cart->quantity * $product->price}}">{{number_format($cart->quantity * $product->price)}}</div>
</div>
@endforeach


<?php
  $subtotal=\Cart::getSubTotal();
  $tax = $subtotal*0.05;
  $total = $subtotal;
?>

<div class="totals">
  <div class="totals-item">
    <label>小計</label>
    <div class="totals-value" id="cart-subtotal" data-subtotal="{{$subtotal}}">{{number_format($subtotal)}}</div>
  </div>
  {{-- <div class="totals-item">
    <label>稅金(5%)</label>
    <div class="totals-value" id="cart-tax" data-tax="{{$tax}}">{{number_format($tax)}}</div>
  </div> --}}
  <div class="totals-item">
    <label>運費</label>
    <div class="totals-value" id="cart-shipping">免運</div>
  </div>
  <div class="totals-item totals-item-total">
    <label>總計</label>
    <div class="totals-value" id="cart-total" data-total="{{$total}}">{{number_format($total)}}</div>
  </div>
</div>

<a href="/create_order" class="checkout">下單購買</a>

</div>

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="  crossorigin="anonymous"></script>

<script>

    /* Set rates + misc */
     var taxRate = 0.05;
     var shippingRate = 0;
     var fadeTime = 300;


     // 改變商品數量
     $('.product-quantity input').change( function() {
         console.log($(this).attr('data-id'));
             // 拿到購物車產品ID
             var id=$(this).attr('data-id');
             var _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
             var qty=$(this).val();

             // 建立表單
             var formData = new FormData;

             // 存入資料到表單內
             formData.append('id',id);
             formData.append('_token',_token);
             formData.append('qty',qty);

             // 送出請求
             fetch('/update_cart',{
                 method:'POST',
                 body:formData,
             })
             .then(function(response){
                 return response.text()
             })
             .then(function(data){
                 console.log('成功',data);
                 // 回傳資料
                 if(data == "false"){
                     alert('找不到該項商品');
                 }

                 else{
                     $('.shopping_cart .qty').text(data);
                 }

             })
             .catch(function(error){
                 console.log('錯誤',error);
             });


          updateQuantity(this);
     });

     // 刪除商品
     $('.product-removal button').click( function() {
     console.log($(this).attr('data-id'));

             // 拿到購物車產品ID
             var id=$(this).attr('data-id');
             var _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

             // 建立表單
             var formData = new FormData;

             // 存入資料到表單內
             formData.append('id',id);
             formData.append('_token',_token);

             // 送出請求
             fetch('/del_cart',{
                 method:'POST',
                 body:formData,
             })
             .then(function(response){
                 return response.text()
             })
             .then(function(data){
                 console.log('成功',data);
                 // 回傳資料
                 if(data == "false"){
                     alert('找不到該項商品');
                 }

                 else{
                     $('.shopping_cart .qty').text(data);
                 }

             })
             .catch(function(error){
                 console.log('錯誤',error);
             });

             removeItem(this);
         });

         function recalculateCart()
            {
            var subtotal = 0;

            /* Sum up row totals */
            $('.product').each(function () {
                subtotal += parseFloat($(this).children('.product-line-price').attr('data-price'));
            });

            /* Calculate totals */
            var tax = subtotal * taxRate;
            var shipping = (subtotal > 0 ? shippingRate : 0);
            var total = subtotal;

            /* Update totals display */
            $('.totals-value').fadeOut(fadeTime, function() {
                $('#cart-subtotal').html(subtotal.toLocaleString());
                // $('#cart-tax').html(tax.toLocaleString());
                // $('#cart-shipping').html(shipping.toLocaleString());
                $('#cart-total').html(total.toLocaleString());
                if(total == 0){
                $('.checkout').fadeOut(fadeTime);
                }else{
                $('.checkout').fadeIn(fadeTime);
                }
                $('.totals-value').fadeIn(fadeTime);
            });
            }

         /* Update quantity */
         function updateQuantity(quantityInput)
         {
            var productRow = $(quantityInput).parent().parent();
            var price = parseFloat(productRow.children('.product-price').attr('data-price'));
            var quantity = $(quantityInput).val();
            var linePrice = (price * quantity);

            /* Update line price display and recalc cart totals */
            productRow.children('.product-line-price').each(function () {
                $(this).fadeOut(fadeTime, function() {
                $(this).text(linePrice.toLocaleString());
                $(this).attr('data-price',linePrice);
                recalculateCart();
                $(this).fadeIn(fadeTime);
                });
            });
         }


         /* Remove item from cart */
         function removeItem(removeButton)
         {
         /* Remove row from DOM and recalc cart total */
         var productRow = $(removeButton).parent().parent();
         productRow.slideUp(fadeTime, function() {
             productRow.remove();
             recalculateCart();
         });

         }

 </script>
@endsection
