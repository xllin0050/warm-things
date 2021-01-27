@extends('layouts.admin_app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
<style>
    .table tbody tr td{
            vertical-align: middle;
        }
</style>
@endsection

@section('main')
<div class="container py-5">
    <a class="btn btn-success" href="/admin/product/create">新增產品</a>
    <hr>
    <table id="products" class="display">
        <thead>
            <tr>
                <th>類別</th>
                <th>名稱</th>
                <th>價格</th>
                <th>介紹</th>
                <th>圖片</th>
                <th>編輯</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                @php
                    $typeData = App\ProductType::find($product->type_id);
                @endphp
                <td>{{$typeData->name ?? ''}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td><img img width="200" src="{{$product->img}}" alt=""> </td>
                <td>
                    <a class="btn btn-success" href="/admin/product/edit/{{$product->id}}">編輯</a>
                    <a class="btn btn-danger" href="/admin/product/destroy/{{$product->id}}">刪除</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection

@section('js')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>


<script>
    $(document).ready( function () {
        $('#products').DataTable();
    } );
</script>
@endsection
