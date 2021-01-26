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
    {{-- <a class="btn btn-success" href="/admin/order/create">新增訂單</a> --}}
<table id="myTable" class="display">

    <thead>
        <tr>
            <th>訂單編號</th>
            <th>商品編號</th>
            <th>商品名稱</th>
            <th>價格</th>
            <th>數量</th>
            <th>總計</th>
            <th>狀態</th>
            <th>功能</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        @php
        $statusName = App\OrderStatus::find($order->order_status);
        @endphp
        <tr>
            <td>{{$order->order_number}}</td>
            <td>{{$order->product_id}}</td>
            <td>{{$order->name}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->qty}}</td>
            <td>{{$order->total_price}}</td>
            <td>{{$statusName->status ?? ''}}</td>
            <td>
                <a class= "btn btn-outline-primary btn-sm" href="/admin/order/edit/{{$order->id}}">編輯訂單狀態</a>
                <a class= "btn btn-outline-danger btn-sm" href="/admin/order/destroy/{{$order->id}}">刪除訂單</a>
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

