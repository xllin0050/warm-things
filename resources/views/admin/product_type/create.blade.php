@extends('layouts.admin_app')
@section('css')
    
@endsection
@section('main')
<div class="container py-5">
    <h2>新增產品類別</h2>
    <hr>
    <form action="/admin/product_type/store" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">名稱</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <button type="submit" class="btn btn-primary">送出</button>
        </form>
</div>
@endsection
@section('js')
    
@endsection