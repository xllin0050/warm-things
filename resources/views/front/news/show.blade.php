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
                    href="">展覽公告</a>
            </div>
        </div>
    </section>

    <!-- banner -->
    <div class="banner">
        <img src="./img/03-new_show/new_show_banner.jpg" alt="">
    </div>

    <!-- products -->
    <section>
        <div class="container">
            <h1>展覽公告</h1>
            <div class="product row">
                <div class="pic col-sm-12 col-md-6" data-aos="fade-right" data-aos-duration="3000">
                    <img src="./img/03-new_show/show01.jpg" alt="">
                </div>
                <div class="text col-sm-12 col-md-6">
                    <p class="date">2021-01-29</p>
                    <p class="title">釉藥和土質素材的美感 -山口友一</p>
                    <p class="content">
                        小代燒是九州的代表陶器之一<br>
                        四百年前於熊本的小岱山下開窯製陶<br>
                        自由奔放的流釉技法為其特色<br>
                        充分表現釉藥和土質素材之美<br>
                        樸素的質感非常適合日常使用<br>
                        即使作為茶陶也有另一番風格<br>
                        現在於熊本荒尾市共有12個窯<br>
                        以小岱山特有的陶土作為原料<br>
                        繼承久遠的傳統製陶技術
                    </p>
                </div>
            </div>
            <div class="product row">
                <div class="pic col-sm-12 col-md-6" data-aos-duration="3000" data-aos="fade-right">
                    <img src="./img/03-new_show/show02.jpg" alt="">
                </div>
                <div class="text col-sm-12 col-md-6">
                    <p class="date">2021-01-29</p>
                    <p class="title">傳統與現代融合之美 -中里花子</p>
                    <p class="content">
                        傳統唐津燒為400年的知名茶陶產地<br>
                        在漫長時間中累積了豐富的製陶技術<br>
                        以唐津燒作為基本架構<br>
                        並不局限於傳統唐津的施釉技法<br>
                        從作品的造型美學與細節處理<br>
                        展現女性陶藝家的個人風格之美<br>
                        中里花子認為自己所燒製的器皿<br>
                        需要透過料理和花草<br>
                        並且於日常生活中使用才算完成<br>
                        希望製作更廣更多不同表現方式的作品
                    </p>
                </div>
            </div>
        </div>
    </section>





@endsection

@section('js')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>



@endsection
