@extends('layouts.admin_app')

@section('css')
    
@endsection
@section('main')
<div class="container w-50 py-5">
    <h2>編輯訂單狀態</h2>
    <hr>
    <form action="/admin/order/update/{{$order->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="order_number">訂單編號</label>
            <input type="text" class="form-control" id="order_number" name="order_number" value="{{$order->order_number}}" readonly>
        </div>
        <div class="form-group">
            <label for="name">客戶姓名</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" readonly>
        </div>
        <div class="form-group">
            <label for="name">客戶電話</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$user->phone}}" readonly>
        </div>
        <div class="form-group">
            <label for="qty">數量</label>
            <input type="text" class="form-control" id="qty" name="qty" value="{{$order->qty}}" readonly>
        </div>
        <div class="form-group">
            <label for="price">總價</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$order->price}}" readonly>
        </div>
        
        <div class="form-group">
            <label for="order_status">類別</label>
                        <select class="form-control" class="form-control" id="order_status" name="order_status">
                @foreach ($orderStatus as $status)
                <option value={{$status->id}}>
                    {{$status->status}}
                </option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">送出</button>
    </form>
</div>
@endsection
@section('js')
    
@endsection