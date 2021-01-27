<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的帳號</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .font-size-small {
        font-size: 20px;
        font-weight: bold;
        }

        .font-size-big {
        font-size: 30px;
        font-weight: bold;
        }

        .font-weight {
        font-weight: bold;
        }
        /*# sourceMappingURL=css.css.map */
    </style>

</head>

<body>
@extends('layouts.template')
@section('css')
<style>
    .font-size-small {
        font-size: 20px;
        font-weight: bold;
    }

    .font-size-big {
        font-size: 30px;
        font-weight: bold;
    }

    .font-weight {
        font-weight: bold;
    }
</style>

@endsection
@section('main')
<div class="container">
<form action="{{ route ('account', $user->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
   
        <div class="account_detail_title font-size-big mt-5">帳戶詳細資料</div>
        <hr>
        <section>
            <div class="edit_title font-size-small py-4">編輯</div>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">姓名</label>
                        <input type="text" class="form-control" id="inputName" name="name" value="{{$user->name}}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputZip">郵遞區號</label>
                        <input type="text" class="form-control" id="inputZip" name="zip" value="{{$user->zip}}">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">電子郵件</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" value="{{$user->email}}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputAddress">地址</label>
                        <input type="text" class="form-control" id="inputAddress" name="address" value="{{$user->address}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputPhone">電話</label>
                        <input type="text" class="form-control" id="inputPhone" name="phone" value="{{$user->phone}}">
                    </div>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#changeData">
                    儲存編輯
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="changeData" tabindex="-1" role="dialog" aria-labelledby="LabelCD" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="LabelCD">資料更改</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            是否確定更改資料？
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                        <button type="submit" class="btn btn-primary">確定</button>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
    </section>
    <hr>
    <div class="my_order font-size-small mt-5">我的訂單</div>
    <hr>
    <section>
        <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="col-2 font-weight">訂單編號</div> 
            <div class="col-2 font-weight">成立時間</div>
            <div class="col-1 font-weight">總計</div>
            <div class="col-1 font-weight">狀態</div>
            <div class="font-weight">動作</div>
        </li>
    @foreach ($orders as $order)
        @php
        $statusName = App\OrderStatus::find($order->order_status);
        @endphp

        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="col-3">{{$order->order_number}}</div>

            <div class="col-3">{{$order->created_at->format('Y-m-d')}}</div>
            <div class="col-2">{{$order->total_price}}</div>
            <div class="col-2">{{$statusName->status ?? ''}}</div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Order_{{$order->id}}">
            查看詳細
            </button>
  
            <!-- Modal -->
            <div class="modal fade" id="Order_{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabelOrder_{{$order->id}}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabelOrder_{{$order->id}}">訂單詳細</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">品名</th>
                                    <th scope="col">單價</th>
                                    <th scope="col">數量</th>
                                    <th scope="col">總計</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">{{$order->id}}</th>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->price}}</td>
                                    <td>{{$order->qty}}</td>
                                    <td>{{$order->total_price}}</td>
                                </tr>
                                </tbody>
                            </table>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
            </div>
        </li>    
    @endforeach
        </ul>
    </section>
    <hr>
</div>
@endsection
@section('js')
    <script>
        $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
    </script>
@endsection

