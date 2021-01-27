@extends('layouts.admin_app')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endsection
@section('main')
<div class="container py-5">
    <a class="btn btn-success" href="/admin/new_arrival/create">新增上架公告</a>
    <hr>
    <table id="mytable" class="display">
        <thead>
            <tr>
                <th>標題</th>
                <th>發布日</th>
                <th>內文</th>
                <th>圖片</th>
                <th style="width:120px">功能</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($newArrivals as $newArrival)
            <tr>
                <td>{{$newArrival->title}}</td>
                <td>{{$newArrival->date}}</td>
                <td>{{$newArrival->content}}</td>
                <td><img width="200" img src=" {{$newArrival->img}}" alt=""></td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-success" href="/admin/new_arrival/edit/{{$newArrival->id}}">編輯</a>
                        <a class="btn btn-danger" href="/admin/new_arrival/destroy/{{$newArrival->id}}">刪除</a>
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
        $('#mytable').DataTable();
    } );
</script>
@endsection
