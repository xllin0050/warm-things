@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="{{ asset('css/02-about_us.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection


@section('main')

<section class="banner">
    <div class="banner_pic">
        <img src="/img/02-about_us/about_us_banner.jpg" alt="" >
    </div>
</section>
<div class="container-fluid">
    <section class="wrap">

        <div class="text_area">
            <div class="title" data-aos="fade-up"
            data-aos-duration="2000">|<br>
            我們的理念
            </div>
            <div class="subtitle" data-aos="fade-up"
            data-aos-duration="2000" data-aos-delay="300">
            以日本「和」文化為中心。
            </div>

            <div class="content" data-aos="fade-up"
            data-aos-duration="2000" data-aos-delay="300">
            我們不是販賣廉價品的網路商店，<br>
            以成為理念引導者為目標，
            讓購買者在互動的過程中，<br>
            體驗我們的想法及理念，
            感覺受到尊重及用心對待，
            發揚一期一會之精神。
            </div>

            <div class="content" data-aos="fade-up"
            data-aos-duration="2000" data-aos-delay="600">
            商店除了引進日本各地極具特色的生活器物外，<br>
            也時常舉辦工藝、設計相關的展覽與體驗，<br>
            將日本發展到極致的器物文化，傳遞到台灣人的生活中。
            </div>

        </div>

        <div class="mili_intro">
            <div class="title">
                |<br>
                主辦人介紹</div>
            <div class="row  d-flex">
                <div class="left_box col-12 col-lg-6" data-aos="zoom-out-right" data-aos-duration="2000">
                    <img src="/img/02-about_us/米力a.jpg" alt="">
                </div>
                <div class="right_box col-12 col-lg-6 d-flex ">
                    <span data-aos="fade-up" data-aos-duration="2000" >
                        米力
                    </span>
                    <p data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    有著插畫家、市集策展人、生活雜貨店鋪主理人多重身分，對日常生活獨特角度的發想，讓她擅長為「物」注入靈魂，引進日本各地極具特色的生活器物，不只是關注在實用性，更是把美感揉入日常細節之中，體現如何設計自己的生活這條哲學守則。
                    </p>
                </div>
            </div>
        </div>

        <div class="rick_intro">
            <div class="row  d-flex">
                <div class="left_box col-12 col-lg-6" data-aos="zoom-out-left" data-aos-duration="2000">
                    <img src="/img/02-about_us/RICK.jpg" alt="">
                </div>
                <div class="right_box col-12 col-lg-6 d-flex " >
                    <span data-aos="fade-up" data-aos-duration="2000">
                        Rick
                    </span>
                    <p data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        尤其著迷於日本的「茶道」文化，因此商店二樓收納了六古窯的備前、信樂，朝鮮風格的萩燒到志野、樂燒、織部、京燒等茶碗，將千年歷史傳承的茶道具呈現其中，儼然是台灣最完整的茶道工藝器物書店。
                    </p>
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
