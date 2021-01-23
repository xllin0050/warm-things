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
                    <label  action="/product/{{$productType->id}}" method="POST"><span >{{$productType->name}}</span></label>
                    @csrf
                    @endforeach
                
                </div>
                <div id="#productItems" class="card_wrap">
                    @foreach ($products as $product)
                    <div class="product_card" id="{{$product->type_id}}">
                        <div class="card_img" style="background-image: url('{{$product->img}}')"></div>
                        <div class="product_body">
                            <h2 class="prduct_title"><a href="">【{{$product->name}}】</a></h2>
                            <p class="product_price">售價${{$product->price}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <script>
        // var productCard = $('#productItems');

        // console.log(productCard);
        // var btns = document.querySelectorAll('.btn')
        

        

        // btns.forEach(btn => {
        //     btn.onclick = function(){
        //         innerFunction(btn.dataset.tag)
        //     }
        // });

        // function innerFunction(i){
        //     let img = {!!$product->img!!}
            
        //     productCard.innerHTML +=`
        //         @foreach ($products as $product)
        //             <div class="product_card">
        //                 <div class="card_img" style="background-image: url('${img}')"></div>
        //                 <div class="product_body">
        //                     <h2 class="product_title"><a href="">【${i.{{$product->name}}}】</a></h2>
        //                     <p class="product_price">售價${i.{{$product->price}}}</p>
        //                 </div>
        //             </div>
        //         @endforeach
        //     `
        // }
    </script>
</body>

</html>