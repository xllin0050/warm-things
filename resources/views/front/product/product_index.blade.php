<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品目錄</title>
    <link rel="stylesheet" href="/css/04-product_index.css">
</head>


<body>
    <main>
        <section class="bg_wrap">
            <!-- 麵包屑 -->
            <div class="breadcrumb">
                <a href="" class="back_home">HOME</a><span>-</span><span>線上購物</span><span>-</span><a href="">餐盤器皿</a>
            </div>
            <div class="content_wrap">
                <div class="deraction_img"></div>
                <div class="product_type">
                    @foreach ($productTypes as $productType)
                    <span class="btn" data-id="{{$productType->id}}">{{$productType->name}}</span>
                    @endforeach
                
                    {{-- <span>餐盤器皿</span>
                    <span>日式器皿</span>
                    <span>其他</span> --}}
                </div>
                <div class="card_wrap">
                    @foreach ($products as $product)
                    
                    <div class="product_card">
                        <div class="card_img" style="background-image: url('{{$product->img}}')"></div>
                        <div class="product_body">
                            <h2 class="prduct_title"><a href="">【{{$product->name}}】</a></h2>
                            <p class="product_price">售價${{$product->price}}</p>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="product_card">
                        <div class="card_img" style="background-image: url('../img/04-product_index/古董輪狀系卷.jpg')"></div>
                        <div class="product_body">
                            <h2 class="prduct_title"><a href="">【Warmgrey Tail杯子】</a></h2>
                            <p class="product_price">售價$550</p>
                        </div>
                    </div>
                    <div class="product_card">
                        <div class="card_img" style="background-image: url('../img/04-product_index/古董輪狀系卷.jpg')"></div>
                        <div class="product_body">
                            <h2 class="prduct_title"><a href="">【Warmgrey Tail杯子】</a></h2>
                            <p class="product_price">售價$550</p>
                        </div>
                    </div>
                    <div class="product_card">
                        <div class="card_img" style="background-image: url('../img/04-product_index/古董輪狀系卷.jpg')"></div>
                        <div class="product_body">
                            <h2 class="prduct_title"><a href="">【Warmgrey Tail杯子】</a></h2>
                            <p class="product_price">售價$550</p>
                        </div>
                    </div>
                    <div class="product_card">
                        <div class="card_img" style="background-image: url('../img/04-product_index/古董輪狀系卷.jpg')"></div>
                        <div class="product_body">
                            <h2 class="prduct_title"><a href="">【Warmgrey Tail杯子】</a></h2>
                            <p class="product_price">售價$550</p>
                        </div>
                    </div>
                    <div class="product_card">
                        <div class="card_img" style="background-image: url('../img/04-product_index/古董輪狀系卷.jpg')"></div>
                        <div class="product_body">
                            <h2 class="prduct_title"><a href="">【Warmgrey Tail杯子】</a></h2>
                            <p class="product_price">售價$550</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
    </main>

    <script>
        var productCard = document.querySelector('.card_wrap')
        var btns = document.querySelectorAll('.btn')

    </script>
</body>

</html>