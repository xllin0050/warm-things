{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品目錄</title>
    <link rel="stylesheet" href="/css/04-product_index.css">
</head>


<body> --}}

@extends('layouts.template')
{{-- <title>商品目錄</title> --}}
@section('css')
<link rel="stylesheet" href="{{ asset('css/04-product_index.css')}}">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
@endsection

@section('main')
<section class="bg_wrap">
    <!-- 麵包屑 -->
    <div class="breadcrumb">
        <a href="/" class="back_home">HOME</a><span>-</span><span>線上購物</span>
    </div>

    <a class="cart_icon" href="/checkout">
        <i class="fas fa-shopping-cart shopping_cart">
            <?php
            $getTotalQty=\Cart::getTotalQuantity();
            ?>
            <div class="qty">{{$getTotalQty}}</div>
        </i>
        <span class="note_cart">
            點我結帳
        </span>
    </a>

    <div class="content_wrap">
        <div class="deraction_img"></div>
        <div class="product_type">
            @foreach ($productTypes as $productType)
            <a href="/product/{{$productType->id}}">{{$productType->name}}</a>
            @endforeach
        </div>
        <div id="#productItems" class="card_wrap">
            @foreach ($products as $product)
            <div class="product_card" id="{{$product->type_id}}">
                <div class="card_img" style="background-image: url('{{$product->img}}')"></div>
                <div class="product_body">
                    <h2 class="product_title"><a href="/product/product_detail/{{$product->id}}">【{{$product->name}}】</a></h2>
                    <p class="product_price">售價${{$product->price}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('js')

@endsection
