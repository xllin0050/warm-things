<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>溫事</title>
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('css/00-template.css') }}">
    @yield('css')
</head>
<body>
    <header>
        <!-- 導覽列 -->
        <nav class="wrap">
            <!-- 登入/註冊 -->
            <div class="logLink">
                @guest
                    <a class="" href="{{ route('login') }}">{{ __('登入') }}</a>
                    @if (Route::has('register'))
                        <a class="" href="{{ route('register') }}">{{ __('/ 註冊') }}</a>
                    @endif
                @else
                    <a class="" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('登出') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
            <!-- 購物車 -->
            <div class="productCart">
                <a href="/checkout">購物車</a>
            </div>
            <!-- logo -->

            <div class="logo">
                <a href="/"><img src="/img/00-template/logo.png" alt=""></a>
            </div>
            <!-- 選單 -->
            <div class="nav_btns">
                <ul class="header_nav">
                    <li>
                        <a href="">
                            ::關於我們::
                        </a>
                        <ul class="menu">
                            <li><a href="/about_us">我們的理念</a></li>
                            <li><a href="/adult_utensils">大人器物學</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            ::最新消息::
                        </a>
                        <ul class="menu">
                            <li><a href="/news_product">新品上市</a></li>
                            <li><a href="/news_show">展覽公告</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/product">::線上購物::</a>
                    </li>
                    <li>
                        <a href="/member">::會員專區::</a>
                    </li>
                </ul>
            </div>
            <div class="menu_btn_Area">
                <button class="menu_btn btn position-relative" tabindex="-1"
                    aria-label="Mobile menu toggle">
                    <span class="top_bar bar"></span>
                    <span class="mid_bar bar"></span>
                    <span class="bot_bar bar"></span>
                </button>
            </div>

        </div>
    </header>



    <main>
    @yield('content')
    @yield('main')

    </main>


    <footer>
        <section class="footer_area">

            <!-- 店家資訊 -->
            <div class="footer_info">
                <!-- 導覽列 -->
                <div class="footer_bar">
                    <ul>
                        <li><a href="">::關於我們::</a></li>
                        <li><a href="">::最新消息::</a></li>
                        <li><a href="">::線上購物::</a></li>
                        <li><a href="/member">::會員專區::</a></li>
                    </ul>
                </div>
                <!-- 聯絡資訊 -->
                <div class="Contact_information">
                    <p>104台北市中山北路一段33巷6號</p>
                    <p>Tel:2521-6917</p>
                    <p>Mobil:0935-991315</p>
                    <p>營業時間:中午12點~晚上7點</p>
                </div>
            </div>
            <div class="footer_pic">
                <img src="/img/00-template/bowl_dec.jpg" alt="">
            </div>
        </section>
        <!-- 所有權 -->
        <section class="copyright">
            <p class="copyright_text">Copyright © [2021] [溫事]. All rights reserved.</p>
        </section>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


    <script>
        // btn_click
        let nav_btns = document.querySelector(".nav_btns")
        let menu_btn = document.querySelector(".menu_btn")
        let top_bar = document.querySelector(".top_bar")
        let mid_bar = document.querySelector(".mid_bar")
        let bot_bar = document.querySelector(".bot_bar")


        function menu_click(e) {
            if (window.innerWidth <= 1100) {
                top_bar.classList.toggle("top_click")
                mid_bar.classList.toggle("mid_click")
                bot_bar.classList.toggle("bot_click")
                menu_btn.classList.toggle("menu_btn_click")
                nav_btns.classList.toggle("nav_btns_click")

            }
        }
        menu_btn.addEventListener("click", menu_click)
    </script>
    @yield('js')
</body>

</html>
