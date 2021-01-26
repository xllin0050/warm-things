@extends('layouts.template')

@section('css')
<!-- swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<!-- fontawesome -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!-- google font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC&display=swap" rel="stylesheet">
<!-- aos.js -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<!-- hover.js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover.css" integrity="sha512-Qg72y9f1a3aVc1FVnjq5YURLOOG8fDKQjMnhxYaZgBz4nIVjpVOBUtuMMMqkZPS1FlVrzzEBXq2sM6Qp1zen/Q==" crossorigin="anonymous" />
<link rel="stylesheet" href="{{ asset('css/01-index.css') }}">
@endsection

@section('main')
<!-- banner -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="./img/01-index/00-banner/bannerA.jpg" alt="">
        </div>
        <div class="swiper-slide">
            <img src="./img/01-index/00-banner/bannerB.jpg" alt="">
        </div>
        <div class="swiper-slide">
            <img src="./img/01-index/00-banner/bannerC.jpg" alt="">
        </div>
    </div>

</div>

<!-- aboutUs -->
<section class="aboutUs">
    <div class="aboutUs_text">
        <p id="text_title">關於我們</p>
        <p id="Sub-standard">以日本「和」文化為中心</p>
        <p>我們不是販賣廉價品的網路商店</p>
        <p>以成為理念引導者為目標</p>
        <p>讓購買者在互動的過程中</p>
        <p>體驗我們的想法及理念</p>
        <p>感覺受到尊重及用心對待</p>
        <p>發揚一期一會之精神</p>
        <a href="/about_us"class="hvr-icon-bounce">Read<br/>More<i class="fas fa-chevron-down hvr-icon"></i></a>
    </div>
    <div class="aboutUs_pic" data-aos="zoom-in" data-aos-duration="3000">
        <img src="./img/01-index/01-aboutUs/aboutUs01.jpg" alt="" id="aboutUs_before">
        <img src="./img/01-index/01-aboutUs/aboutUS02.jpg" alt="" id="aboutUs_after">
        <div class="gray_bc"></div>
    </div>

</section>

<!-- Products -->
<section class="products">
    <div class="products_bg">
        <img src="./img/01-index/02-products/productBanner.jpg" alt="">
    </div>
    <h1>PRODUCTS</h1>
    <a href="">::ALL::</a>
    <!-- swiper -->
    <div class="swiper_area">
        <div class="swiper-container-2 ">
            <div class="swiper-wrapper">
                <div class="swiper-slide"
                    style="background-image: url('./img/01-index/02-products/product01.jpg');">
                    <div class="product_text">
                        <h2>美好年代 古董輪狀系卷</h2>
                        <p>有著濃濃的懷舊風味<br>
                            我們喜歡這樣的時代感覺<br>
                            我們喜歡老時代的物品<br>
                            於是不定期不定時會展售一些舊時代用品
                        </p>
                    </div>
                </div>
                <div class="swiper-slide"
                    style="background-image: url('./img/01-index/02-products/product02.jpg');">
                    <div class="product_text">
                        <h2>lab手雕木質動物</h2>
                        <p>tlab動物是餽贈的最佳禮物<br>
                            天然呆萌樣、單純的姿態<br>
                            每一小動物都是全手雕的<br>
                            先用切割厚木片，再經過手雕，最後細磨上色！<br>
                            細部的小小手感，溫潤溫暖<br>

                        </p>
                    </div>
                </div>
                <div class="swiper-slide"
                    style="background-image: url('./img/01-index/02-products/product03.jpg');">
                    <div class="product_text">
                        <h2>丸文山水圖染付食器 中皿</h2>
                        <p>染付的食器趣味<br>
                            染付是日本的稱呼但在中國被稱為青花瓷<br>
                            主要盛行於中國明代的器物代表<br>
                            因為往昔來自中國的青花瓷數量很少<br>
                            自古即受到上層貴族階層的喜愛<br>
                            在日本染付磁器與青白磁同列於食器的最高等級<br>

                        </p>
                    </div>
                </div>
                <div class="swiper-slide"
                    style="background-image: url('./img/01-index/02-products/product04.jpg');">
                    <div class="product_text">
                        <h2>offoff theatre 造形別針</h2>
                        <p>offoff theatre是由插畫家古曉茵所創立的<br>
                            手工製作的動物別針<br>
                            除原創插畫印花表布外<br>
                            以棉花填充成立體<br>
                            輔以繡線及副料加增趣味<br>
                            呈現創作者眼中風格獨具的動物樣貌<br>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide"
                    style="background-image: url('./img/01-index/02-products/product05.jpg');">
                    <div class="product_text">
                        <h2>米力Ｘ印花樂 2017聯名印花系列</h2>
                        <p>印花樂是台灣的原創印花布設計品牌<br>
                            擅長以繽紛的印花風格<br>
                            創造出各種美麗實用的生活商品<br>
                            首度結合台灣知名插畫家<br>
                            生活風格家米力的繪畫元素<br>
                            以台灣為靈感<br>
                            描繪原生種的黃色相思樹、大稻埕的生活物件<br>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide"
                    style="background-image: url('./img/01-index/02-products/product06.jpg');">
                    <div class="product_text">
                        <h2>offoff theatre 造形別針</h2>
                        <p>offoff theatre是由插畫家古曉茵所創立的<br>
                            手工製作的動物別針<br>
                            除原創插畫印花表布外<br>
                            以棉花填充成立體<br>
                            輔以繡線及副料加增趣味<br>
                            呈現創作者眼中風格獨具的動物樣貌<br>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide"
                    style="background-image: url('./img/01-index/02-products/product07.jpg');">
                    <div class="product_text">
                        <h2>美好年代 古董輪狀系卷</h2>
                        <p>有著濃濃的懷舊風味<br>
                            我們喜歡這樣的時代感覺<br>
                            我們喜歡老時代的物品<br>
                            於是不定期不定時會展售一些舊時代用品
                        </p>
                    </div>
                </div>
            </div>
            <!-- 箭頭 -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<!-- News -->
<section class="news">
    <h1>NEWS</h1>
    <div class="new_arriva">

        <div class="item" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
            <span>New Arrival</span>
            <img src="./img/01-index/03-news/01-new/new01.jpg" alt="">
            <h2>三川內燒</h2>
            <p>是江戶時代平戶藩的御用窯元</p>
        </div>
        <div class="item" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500">
            <img src="./img/01-index/03-news/01-new/new02.jpg" alt="">
            <h2>伊萬里燒</h2>
            <p>日本的代表磁器來自九州北部的伊萬里燒</p>
        </div>
    </div>
    <div class="exhibition">

        <div class="item" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="400">
            <span>Exhibition</span>
            <img src="./img/01-index/03-news/02-exhibition/exhibition01.jpg" alt="">
            <h2>中里花子</h2>
            <p>傳統唐津燒為四百年的知名茶陶</p>
        </div>
        <div class="item" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="600">
            <img src="./img/01-index/03-news/02-exhibition/exhibition02.jpg" alt="">
            <h2>山口友一</h2>
            <p>小代燒是九州的代表陶器之一</p>
        </div>
    </div>
    <a href="">::See More::</a>
    <div class="gray_bc"></div>
</section>
@endsection

@section('js')
{{-- aboutUs --}}
{{-- AOS --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<!-- swiper -->
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + '</span>';
            },
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });
</script>
{{-- product --}}
<script>
    var swiper = new Swiper('.swiper-container-2', {
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 50,
            },
        }
    });
</script>
@endsection
