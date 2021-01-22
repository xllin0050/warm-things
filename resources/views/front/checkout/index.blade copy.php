<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
    <style>

    </style>
</head>
<body>

    <h1>Shopping Cart</h1>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>

  @foreach ($carts as $cart)
    <?php $product = App\Product::find($cart->id);?>
  <div class="product">
    <div class="product-image">
      <img src="{{$product->img}}">
    </div>
    <div class="product-details">
      <div class="product-title">{{$product->name}}</div>
      <p class="product-description">{{$product->description}}</p>
    </div>
    <div class="product-price" data-price="{{$product->price}}">{{number_format($product->price)}}</div>
    <div class="product-quantity">
      <input type="number" value="{{$cart->quantity}}" data-id="{{$cart->id}}" min="1">
    </div>

    <div class="product-removal">
      <button class="remove-product" data-id="{{$cart->id}}">
        Remove
      </button>
    </div>
    <div class="product-line-price" data-price="{{$product->price * $cart->quantity}}">{{number_format($product->price * $cart->quantity)}}</div>
  </div>

  @endforeach


  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>
  </div>

      <button class="checkout">Checkout</button>

</div>

<script src="{{asset('css/checkout.css')}}">


/* Set rates + misc */
 var taxRate = 0.05;
 var shippingRate = 15.00;
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
         subtotal += parseFloat($(this).children('.product-line-price').text());
     });

     /* Calculate totals */
     var tax = subtotal * taxRate;
     var shipping = (subtotal > 0 ? shippingRate : 0);
     var total = subtotal + tax + shipping;

     /* Update totals display */
     $('.totals-value').fadeOut(fadeTime, function() {
         $('#cart-subtotal').html(subtotal.toLocalstring());
         $('#cart-tax').html(tax.toLocalstring());
         $('#cart-shipping').html(shipping.toLocalstring());
         $('#cart-total').html(total.toLocalstring());
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
     /* Calculate line price */
     var productRow = $(quantityInput).parent().parent();
     var price = parseFloat(productRow.children('.product-price').attr('data-price'));
     var quantity = $(quantityInput).val();
     var linePrice = price * quantity;

     /* Update line price display and recalc cart totals */
     productRow.children('.product-line-price').each(function () {
      $(this).fadeOut(fadeTime, function() {
         $(this).text(linePrice.toLocalString());
         $(this).attr('data-Price'.linePrice);
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

</body>
</html>
