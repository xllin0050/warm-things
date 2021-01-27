<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品內頁</title>
    <!-- swiper -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/product_detail.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>

    </style>
</head>

<body>
    <main>

        <section class="wrap">

            <!-- 麵包屑 -->
            <div class="breadcrumb">
                <a href="/" class="back_home">HOME</a><span>-</span><span>線上購物</span><span>-</span><a
                    href="">餐盤器皿</a><span>-{{$products->name}}</span>
            </div>

            <a class="cart_icon" href="/checkout">
                <i class="fas fa-shopping-cart shopping_cart">
                    <?php
                    $getTotalQty=\Cart::getTotalQuantity();
                    ?>
                    <div class="qty">{{$getTotalQty}}</div>
                </i>
                <span class="note_cart">
                    點我結帳
                </span>
            </a>

            <div class="product_info">
                <div class="product_img_wrap">
                    <img img width="600" src={{$products->img}} alt="">
                </div>
                <div class="product_selection">
                    <div class="product_title">{{$products->name}}</div>
                    <div class="product_price"><span>{{$products->price}}</span></div>
                    {{-- <div class="product_thumbnail item">
                        <img src="./img/04-product_detail/Warmgrey Tail 生活設計展-1 布商品.jpg" alt="產品縮圖">
                        <img src="./img/04-product_detail/Warmgrey Tail 生活設計展-1 布商品.jpg" alt="產品縮圖">
                        <img src="./img/04-product_detail/Warmgrey Tail 生活設計展-1 布商品.jpg" alt="產品縮圖">
                    </div> --}}
                    <div class="product_quantity">
                        <div class="btn_group">
                            <button type="button" class="btn add_down">-</button>
                            <div class="show_quantity">1</div>
                            <input type="number" value="1" name="quantity" class="real_quantity" hidden>
                            <button type="button" class="btn add_up">+</button>
                        </div>
                    </div>


                    <div class="addchart">
                        <input type="button" class="addchart_btn" data-id="{{$products->id}}" value="加入購物車">

                    </div>
                    <div class="note">付款後，從備貨到寄出商品為3個工作天(不包含假日)</div>
                </div>
            </div>
            <div class="product_introduction">
                <div class="content_title">{!! $products->description !!}</div>
                <div class="product_content">
                    Warmgrey Tail是一個來自韓國新進的設計品牌<br>
                    根據其自然風格的插圖創作各種商品<br>
                    由插畫家Kim Han-geol和藝術總監Lee Hyuna成立該品牌<br>
                    在短短三年多的時光<br>
                    創建了世界的通路<br>
                    可愛就是價值<br>
                    <br>
                    Warmgrey Tail的藝術有能力解除人們的武裝<br>
                    因為它們讓人想起童話故事中的場景<br>
                    無論是在家中還是在辦公室<br>
                    無論環境如何<br>
                    他們的插圖都能營造出平靜的效果<br>
                </div>
                <div class="product_imgs">
                    <img src="./img/04-product_detail/Warmgrey Tail 生活設計展-1 布商品.jpg" alt="">
                    <img src="./img/04-product_detail/Warmgrey Tail 生活設計展-1 布商品.jpg" alt="">
                    <img src="./img/04-product_detail/Warmgrey Tail 生活設計展-1 布商品.jpg" alt="">
                </div>

            </div>

        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="  crossorigin="anonymous"></script>
    <script>
        var addCartBtn = document.querySelector('.addchart_btn');

        addCartBtn.onclick = function(){

            var id=addCartBtn.getAttribute('data-id');

            var qty= document.querySelector('.real_quantity').value;


            var _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            var formData = new FormData;



            formData.append('id',id);
            formData.append('_token',_token);
            formData.append('qty',qty);

            fetch('/add_cart',{
                    method:'POST',
                    body:formData,
                })

                .then(function(response){
                    return response.text()
                })


                .then(function(data){
                    console.log('成功',data);
                    if(data == "false"){
                        alert('找不到該項商品');
                    }
                    else{
                        $('.shopping_cart .qty').text(data);
                    }
                })
                .catch(function(error){
                    console.log('錯誤',error);
                })


        };

        var add_down= document.querySelector('.add_down');
        var add_up= document.querySelector('.add_up');
        var show = document.querySelector('.show_quantity');
        var quantity = document.querySelector('.real_quantity');

        add_down.onclick = function(){
            if (quantity.value > 1){
                quantity.value = parseInt(quantity.value) - 1
                show.innerHTML = quantity.value
            }
        }
        add_up.onclick = function(){
            if (quantity.value < 100){
                quantity.value = parseInt(quantity.value) + 1
                show.innerHTML = quantity.value
            }
        }
    </script>

</body>

</html>
