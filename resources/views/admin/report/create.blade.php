@extends('layouts.admin_app')

@section('css')
@endsection

@section('main')
    <div class="container">
        <h2>新增媒體報導</h2>
        <hr>
        <form action="/admin/report/store" method="POST" enctype="multipart/form-data">
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
                <input type="text" class="form-control" id="content" name="content">
            </div>
            <div class="form-group">
                <label for="img">圖片</label>
                <input type="file" class="form-control" id="img" name="img">
            </div>
            {{-- <div class="form-group">
                <label for="imgs">其他圖片</label>
                <input type="file" class="form-control" id="img" name="imgs[]"multiple>
            </div> --}}
            <button type="submit" class="btn btn-primary">送出</button>
          </form>
    </div>
@endsection

@section('js')

@endsection