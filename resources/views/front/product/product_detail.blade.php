<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品內頁</title>
    <!-- swiper -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/04-product_detail.css">
    <style>

    </style>
</head>

<body>
    <main>
        <section class="wrap">

            <!-- 麵包屑 -->
            <div class="breadcrumb">
                <a href="" class="back_home">HOME</a><span>-</span><span>線上購物</span><span>-</span><a
                    href="">餐盤器皿</a><span>-Warmgrey
                    Tail掛布</span>
            </div>

            <div class="product_info">
                <div class="product_img_wrap">
                    <img src={{$products->img}} alt="">
                </div>
                <div class="product_selection">
                    <div class="product_title">{{$products->title}}</div>
                    <div class="product_price"><span>{{$products->price}}</span></div>
                    <div class="product_thumbnail item">
                        <img src="./img/04-product_detail/Warmgrey Tail 生活設計展-1 布商品.jpg" alt="產品縮圖">
                        <img src="./img/04-product_detail/Warmgrey Tail 生活設計展-1 布商品.jpg" alt="產品縮圖">
                        <img src="./img/04-product_detail/Warmgrey Tail 生活設計展-1 布商品.jpg" alt="產品縮圖">
                    </div>
                    <div class="product_quantity">
                        <div class="btn_group">
                            <button type="button" class="btn add_down">-</button>
                            <input type="text" value="1" name="quantity" class="item-quantity">
                            <button type="button" class="btn add_up">+</button>
                        </div>
                    </div>
                    <div class="addchart">
                        <input type="button" data-id="{{$products->id}}" value="加入購物車">
                    </div>
                    <div class="note">付款後，從備貨到寄出商品為3個工作天(不包含假日)</div>
                </div>
            </div>
            <div class="product_introduction">
                <div class="content_title">{{$products->content}}</div>
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

    <script>

var addCartBtn = document.querySelector('.addchart');

    addCartBtn.onclick = function(){

        var id=this.getAttribute('data-id');

        var _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        var formData = new FormData;

        formData.append('id',id);
        formData.append('_token',_token);

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
        });


    };


    </script>

</body>

</html>
