@extends('layouts.admin_app')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endsection
@section('main')
<div class="container py-5">
    <a class="btn btn-success" href="/admin/inform/create">新增展覽公告</a>
    <hr>
    <table id="informs" class="display">
        <thead>
            <tr>
                <th>標題</th>
                <th>開始日期</th>
                <th>結束日期</th>
                <th>內文</th>
                <th>圖片</th>
                <th>編輯</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($informs as $inform)
            <tr>
                <td>{{$inform->title}}</td>
                <td>{{$inform->openingDate}}</td>
                <td>{{$inform->closingDate}}</td>
                <td>{{$inform->content}}</td>
                <td><img src="{{$inform->img}}" alt=""></td>
                <td>{{$inform->name}}</td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-success" href="/admin/inform/edit/{{$inform->id}}">編輯</a>
                        <a class="btn btn-danger" href="/admin/inform/destroy/{{$inform->id}}">刪除</a>
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
        $('#informs').DataTable();
    } );
</script>
@endsection