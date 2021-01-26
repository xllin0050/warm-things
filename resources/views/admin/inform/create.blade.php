@extends('layouts.admin_app')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
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
            <label for="img">公告圖片</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>

        <div class="form-group">
            <label for="content">內文</label>
            <textarea class="form-control" id="content" rows="3" name="content"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">送出</button>

    </form>
</div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>

        $('#content').summernote({
            placeholder: '請輸入商品描述',
            tabsize: 2,
            height: 100
        });
    </script>

@endsection
