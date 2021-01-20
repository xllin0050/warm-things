@extends('layouts.admin_app')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endsection
@section('main')
<div class="container py-5">
    <a class="btn btn-success" href="/admin/product_type/create">新增產品類別</a>
    <hr>
    <table id="product_types" class="display">
        <thead>
            <tr>
                <th>商品類型</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productTypes as $productType)
            <tr>
                <td class="d-flex justify-content-between align-items-center">{{$productType->name}}
                    <div class="btn-group">
                        <a class="btn btn-success" href="/admin/product_type/edit/{{$productType->id}}">編輯</a>
                        <a class="btn btn-danger" href="/admin/product_type/destroy/{{$productType->id}}">刪除</a>
                    </div>
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
        $('#product_types').DataTable();
    } );
</script>
@endsection