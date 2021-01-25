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
<form action="{{ route ('account', $user->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="container">
    <div class="account_detail_title font-size-big mt-5">帳戶詳細資料</div>
    <hr>
    <section>
        <div class="edit_title font-size-small py-4">編輯</div>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">電子郵件</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" value="{{$user->email}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">縣市</label>
                    <select id="inputCity" class="form-control" name="city">
                        <option selected>台中市</option>
                        <option>新北市</option>
                        <option>臺北市</option>
                        <option>桃園市</option>
                        <option>臺南市</option>
                        <option>高雄市</option>
                        <option>新竹縣</option>
                        <option>苗栗縣</option>
                        <option>彰化縣</option>
                        <option>南投縣</option>
                        <option>雲林縣</option>
                        <option>嘉義縣</option>
                        <option>屏東縣</option>
                        <option>宜蘭縣</option>
                        <option>基隆市</option>
                        <option>新竹市</option>
                        <option>嘉義市</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">姓名</label>
                    <input type="text" class="form-control" id="inputName" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">街道地址</label>
                    <input type="text" class="form-control" id="inputAddress" name="address">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputZip">郵遞區號</label>
                    <input type="text" class="form-control" id="inputZip" name="zip">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPhone">電話</label>
                    <input type="text" class="form-control" id="inputPhone" name="phone">
                </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                儲存編輯
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        是否確定更改資料？
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary">確定</button>
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
                <div class="col-2 font-weight">訂單</div> 
                <div class="col-2 font-weight">成立日期</div>
                <div class="col-1 font-weight">總計</div>
                <div class="font-weight">動作</div>
              </li>
              @foreach ($orders as $order)
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="col-3">{{$order->order_number}}</div>
                <div class="col-3">{{$order->created_at}}</div>
                <div class="col-2">{{$order->total_price}}</div>
                {{-- <button type="button" class="btn btn-primary">展開</button> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" data-id="{{$order->order_number}}">展開</button>
            </li>
                @endforeach  
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="card-title">訂單詳細資料</h5>
                        <div class="row">
                            @foreach ($orders as $order)
                            <ul class="list-group">
                                <li class="list-group-item">品名{{$order->name}}</li>
                                <li class="list-group-item">單價{{$order->price}}</li>
                                <li class="list-group-item">數量{{$order->qty}}</li>
                                <li class="list-group-item">總價{{$order->total_price}}</li>
                              </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                    </div>
                </div>
                </div>
             
             
                

             <!-- Button trigger modal -->
   
          </ul>
    </section>
    <hr>
</div>
@endsection
@section('js')
    
@endsection

