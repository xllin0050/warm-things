@extends('layouts.admin_app')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <style>
        .image_area{
            position: relative;
        }

        .del_btn{
            position: absolute;
            top: 0;
            right:0;
            width: 35px;
            height: 35px;
            transform: translate(30%, 30%);
        }
    </style>
@endsection

@section('main')
    <div class="container">
        <h2>編輯新品上市</h2>
        <hr>
        <form action="/admin/new_arrival/update/{{$newArrivals->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label class="col-2" for="title">標題</label>
              <input  type="text" class="form-control col-10" class="form-control" id="title" name="title" value="{{$newArrivals->title}}"required>
            </div>
            
            <div class="form-group row">
              <label class="col-2" for="date">日期</label>
              <input type="date" class="form-control col-10" id="date" name="date" value="{{$newArrivals->date}}"required>
            </div>

            <div class="form-group row">
                <label class="col-2" for="img">目前圖片</label>
                <img src="{{$newArrivals->img}}" alt="" width="200">
            </div>

            <div class="form-group row">
                <label class="col-2" for="img">重新上傳圖片</label>
                <input type="file" class="form-control col-10" id="img" name="img" value="{{$newArrivals->img}}">
            </div>

            <div class="form-group row">
                <label class="col-2" for="content">內文</label>
                <textarea type="text" class="form-control col-10" id="content" name="content" value="{{$newArrivals->content}}"required>
                </textarea>
            </div>
            
            <hr>
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
