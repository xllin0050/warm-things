@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="{{ asset('css/03-news_show.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
@endsection
@section('main')


    <!-- breadcrumb_bar -->
    <section class="breadcrumb_bar">
        <div class="wrap">
            <div class="breadcrumb">
                <a href="/" class="back_home">HOME</a><span>-</span><span>最新消息</span><span>-</span><a
                    href="">新品上市</a>
            </div>
        </div>
    </section>

    <!-- banner -->
    <div class="banner">
        <img src="./img/03-news_product/banner.jpg" alt="">
    </div>

    <!-- products -->
    <section>
        <div class="container">
            <h1>新品上市</h1>
            <div class="product row">
                <div class="pic col-sm-12 col-md-6" data-aos="fade-right" data-aos-duration="3000">
                    <img src="/img/03-news_product/new01.jpg" alt="">
                </div>
                <div class="text col-sm-12 col-md-6">
                    <p class="date">2021-01-29</p>
                    <p class="title">三川內燒</p>
                    <p class="content">
                        是江戶時代平戶藩的御用窯元<br>
                        主要是燒製獻上朝廷和幕府的作品<br>
                        因為受到平戶藩的保護<br>
                        不惜時間、材料而燒製出高完成度的陶磁器<br>
                        傳統的三川內燒是以描繪「唐子繪」為主<br>
                        另外還有花草和動物等文樣<br>
                        在江戶時代受到平戶藩的命令「獻上唐子圖」<br>
                        所描繪燒製「七人唐子圖」是最為著名的<br>
                        也因此「唐子繪」的繪付成為產地的特徵和代<br>
                    </p>
                </div>
            </div>
            <div class="product row">
                <div class="pic col-sm-12 col-md-6" data-aos-duration="3000" data-aos="fade-right">
                    <img src="/img/03-news_product/news02.jpg" alt="">
                </div>
                <div class="text col-sm-12 col-md-6">
                    <p class="date">2021-01-29</p>
                    <p class="title">伊萬里燒</p>
                    <p class="content">
                        日本的代表磁器是來自九州北部的伊萬里燒<br>
                        伊萬里在江戶時代是陶磁輸出的港口<br>
                        產地其實來自肥前國有田周邊區域所製作的陶磁<br>
                        因為統一從伊萬里輸出到歐洲大陸<br>
                        所以被稱為伊萬里燒<br>
                        從此才進入染付與彩繪磁器的世界<br>
                        由於中國在明代末期陷入嚴重內亂<br>
                        中國產瓷器無法輸出的窘迫時刻<br>
                        伊萬里燒在此時順利取代中國瓷器
                    </p>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('js')

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>


@endsection
