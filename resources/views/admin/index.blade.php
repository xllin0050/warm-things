@extends('layouts.admin_app')
@section('css')
@endsection
@section('main')
<div class="container w-25">
    <div class="card mb-5"><div class="card-body">
          <h5 class="card-title">商品上架管理</h5>
          {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
          <a href="/admin/product" class="btn btn-primary">前往</a>
        </div></div>
    <div class="card mb-5"><div class="card-body">
          <h5 class="card-title">商品分類管理</h5>
          {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
          <a href="/admin/product_type" class="btn btn-primary">前往</a>
        </div></div>
    <div class="card mb-5"><div class="card-body">
            <h5 class="card-title">展覽公告管理</h5>
            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
            <a href="/admin/inform" class="btn btn-primary">前往</a>
          </div></div>
    <div class="card mb-5"> <div class="card-body">
            <h5 class="card-title">上市消息管理</h5>
            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
            <a href="/admin/new_arrival" class="btn btn-primary">前往</a>
          </div></div>
    <div class="card mb-5"><div class="card-body">
            <h5 class="card-title">訂單管理</h5>
            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
            <a href="/admin/order" class="btn btn-primary">前往</a>
          </div></div>
</div>
@endsection
@section('js')
@endsection