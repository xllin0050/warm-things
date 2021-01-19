@extends('layouts.admin_app')
@section('css')
    
@endsection
@section('main')
<div class="container py-5">
    <h2>新增公告</h2>
    <hr>
    <form action="/admin/inform/store" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="title">標題</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="openingDate">開始日期</label>
            <input type="date" class="form-control" id="openingDate" name="openingDate">
        </div>

        <div class="form-group">
            <label for="closingDate">結束日期</label>
            <input type="date" class="form-control" id="closingDate" name="closingDate">
        </div>

        <div class="form-group">
            <label for="img">商品圖片</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>

        {{-- <div class="form-group">
            <label for="imgs">副圖片</label>
            <input type="file" class="form-control" id="imgs" name="imgs[]" multiple>
        </div> --}}

        <div class="form-group">
            <label for="description">內文</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">送出</button>

    </form>
</div>
@endsection
@section('js')
    
@endsection