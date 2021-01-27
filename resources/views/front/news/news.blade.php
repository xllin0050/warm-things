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
        @csrf
        <div class="container">
            <h1>新品上市</h1>
            @foreach ($newArrivals as $newArrival)
            <div class="product row">
                <div class="pic col-sm-12 col-md-6" data-aos="fade-right" data-aos-duration="3000">
                    <img src="{{$newArrival->img}}" alt="">
                </div>
                <div class="text col-sm-12 col-md-6">
                    <p class="date">{{$newArrival->date}}</p>
                    <p class="title">{{$newArrival->title}}</p>
                    <p class="content">
                        {!!$newArrival->content!!}
                    </p>
                </div>
            </div>
            @endforeach

        </div>
    </section>


@endsection

@section('js')

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>


@endsection
