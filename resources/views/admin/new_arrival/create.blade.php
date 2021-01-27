@extends('layouts.admin_app')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('main')
    <div class="container">
        <h2>新增新品</h2>
        <hr>
        <form action="/admin/new_arrival/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="title">標題</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
              <label for="date">日期</label>
              <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="content">內文</label>
                <textarea type="text" class="form-control" id="content" name="content">
            </textarea>
            <div class="form-group">
                <label for="img">圖片</label>
                <input type="file" class="form-control" id="img" name="img">
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
