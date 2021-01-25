@extends('layouts.admin_app')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endsection

@section('main')
<div class="container">
    <a class="btn btn-success" href="/admin/order/create">新增訂單</a>
    <hr>
<table id="myTable" class="display">

    <thead>
        <tr>
            <th>訂單編號</th>
            <th>使用者編號</th>
            <th>總計</th>
            <th>編號</th>
            <th>名稱</th>
            <th>價格</th>
            <th>數量</th>
            <th>圖片</th>
            <th style="width:120px">功能</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>

            <td>{{$order->order_number}}</td>
            <td>{{$order->user_id}}</td>
            <td>{{$order->total_price}}</td>
            <td>{{$order->product_id}}</td>
            <td>{{$order->name}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->qty}}</td>
            <td>{{$order->img}}</td>
            <td>
                <a class= "btn btn-success" href="/admin/order/edit/{{$order->id}}">編輯</a>
                <a class= "btn btn-success" href="/admin/order/destroy/{{$order->id}}">刪除</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>



@endsection

@section('js')
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
</script>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

@endsection

