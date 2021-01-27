@extends('layouts.admin_app')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('main')
<div class="container py-5">
    <h2>新增商品</h2>
    <hr>
    <form action="/admin/product/store" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="type_id">類別</label>
            <select class="form-control" class="form-control" id="type_id" name="type_id">
                @foreach ($productTypes as $productType)
                <option value={{$productType->id}}>
                    {{$productType->name}}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="name">名稱</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="price">價格</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>

        <div class="form-group">
            <label for="img">商品圖片</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>

        <div class="form-group">
            <label for="description">描述</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">送出</button>

    </form>
</div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>

    $('#description').summernote({
        placeholder: '請輸入商品描述',
        tabsize: 2,
        height: 100
      });
</script>
@endsection
