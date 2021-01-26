@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="{{ asset('css/05-adult_utensils.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection
@section('main')

<div class="container">
    <section class="banner">
            <div class="banner_pic">
                <img  style="width: 100%;" src="/img/05-adult_utensils/adult_banner.jpg" alt="" >
                <div class="text">關於大人器物學</div>
            </div>
    </section>
    <section class="text_area">
            <div class="text title" data-aos="fade-up"
            data-aos-duration="2000">溫事 X 米力 X茶之器古書堂=大人器物學</div>
            <div class="text content" data-aos="fade-up"
            data-aos-duration="2000" data-aos-delay="300">
                器物文化是我們所關注的焦點，<br>
                不管是數百年前的日本六古窯或古典陶磁，<br>
                近代的民藝與設計陶器，<br>
                都希望將之融入成為溫事的血肉精神當中。
                </div>
            <div class="text content" data-aos="fade-up"
            data-aos-duration="2000" data-aos-delay="600">
                溫事是以研究日本民藝陶磁與現代作家為主題，<br>
                而茶之器古書堂則是希望將數百年前的古典工藝包含進來，<br>
                 不光是陶磁的研究、漆器、木器與各種材質的工藝品都是研究的對象。</div>
            <div class="text content" data-aos="fade-up"
            data-aos-duration="2000" data-aos-delay="900">
                器物的世界無比遼闊，<br>
                能夠保留至今的器物文化不是一時興起而為之，<br>
                不實用的設計器形很快就消失在歷史舞台，<br>
                器物文化是千百年來不斷累積與簡化的過程，<br>
                每一個器形或是一種類型，<br>
                都包含了無數職人的心血結晶，<br>
                希望大家跟著我們一起去探索器物的文化世界。
            </div>
    </section>
    <section class="life_box d-flex" data-aos="zoom-in-up" data-aos-duration="3000"  data-aos-anchor-placement="top-bottom" data-aos-delay="1000" >
        <div class="left_box " data-aos-delay="1400"  >
            <div class="row m-0 m-xl-3 mx-md-1  ">
                <div class="pic col-sm-6 col-12 my-sm-3" data-aos="zoom-in-up"data-aos-duration="2000" data-aos-delay="1400">
                    <img  src="/img/05-adult_utensils/adult-life-01.jpg" alt="">
                    <div class="box-hover-text">
                        <span class="box-body">大人的器物學計劃<br>
                            成為有器物品味的大人
                        </span>
                        <a href="http://www.studioss.com/utsuwa/otona.htm" class="box-body">READ MORE</a>
                    </div>

                </div>
                <div class="pic col-sm-6 col-12 my-sm-3 " data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="1700">
                    <a href=""><img  src="/img/05-adult_utensils/adult-life-02.jpg" alt=""></a>
                    <div class="box-hover-text">
                        <span class="box-body">漆器器物學<br>
                            漆器鑑賞基礎知識
                        </span>
                        <a href="http://www.studioss.com/utsuwa/urushi.htm"class="box-body" >READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="row m-0 m-xl-3 mx-md-1 ">
                <div class="pic col-sm-6 col-12 mb-sm-3 " data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="2000">
                    <img  src="/img/05-adult_utensils/adult-life-03.jpg" alt="">
                    <div class="box-hover-text">
                        <span class="box-body">金繼惜物之美<br>
                            愛物惜物的修補工藝

                        </span>
                        <a href="http://www.studioss.com/utsuwa/kintsugi.htm"class="box-body" >READ MORE</a>
                    </div>
                </div>
                <div class="pic col-sm-6 col-12 mb-sm-3 " data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="2300">
                    <img  src="/img/05-adult_utensils/adult-life-04.jpg" alt="">
                    <div class="box-hover-text">
                        <span class="box-body">民藝器物學<br>
                            旅行.器物.生活的民藝
                        </span>
                        <a  class="box-body" href="http://www.studioss.com/utsuwa/mingei.htm">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="right_box "  >
            <div class="text">LIFE</div>
        </div>
    </section>
    <section class="art_box d-flex " data-aos="zoom-in-up" data-aos-duration="3000"  data-aos-anchor-placement="top-bottom" >
        <div class="right_box">
            <div class="text">ART</div>
        </div>
        <div class="left_box" data-aos-delay="300" >
            <div class="row m-0 m-xl-3 mx-md-1 ">
                <div class="pic col-sm-6 col-12 my-sm-3 " data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="600" >
                    <a href=""><img  src="/img/05-adult_utensils/adult-art-01.jpg" alt=""></a>
                    <div class="box-hover-text">
                        <span class="box-body">懷石器物學<br>
                            懷石器物的基礎知識

                        </span>
                        <a href="http://www.studioss.com/utsuwa/kaiseki.htm"class="box-body" >READ MORE</a>
                    </div>
                </div>
                <div class="pic col-sm-6 col-12 my-sm-3 " data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="900">
                    <a href=""><img  src="/img/05-adult_utensils/adult-art-02.jpg" alt=""></a>
                    <div class="box-hover-text">
                        <span class="box-body">魯山人器物學<br>
                            魯山人與陶磁鑑賞

                        </span>
                        <a href="http://www.studioss.com/utsuwa/rosanjin.htm"class="box-body" >READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="row m-0 m-xl-3 mx-md-1 ">
                <div class="pic col-sm-6 col-12 mb-sm-3 " data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="1200">
                    <img  src="/img/05-adult_utensils/adult-art-03.jpg" alt="">
                    <div class="box-hover-text">
                        <span class="box-body">茶碗器物學<br>
                            茶碗的基礎知識

                        </span>
                        <a href="http://www.studioss.com/utsuwa/chawan.htm"class="box-body" >READ MORE</a>
                    </div>
                </div>
                <div class="pic col-sm-6 col-12 mb-sm-3 " data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="1500">
                    <img  src="/img/05-adult_utensils/adult-art-04.jpg" alt="">
                    <div class="box-hover-text">
                        <span class="box-body">茶道器物學<br>
                            茶之湯基礎知識

                        </span>
                        <a href="http://www.studioss.com/utsuwa/chado.htm"class="box-body" >READ MORE</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script>
    AOS.init();
</script>
<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>
@endsection

