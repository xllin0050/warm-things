@extends('layouts.admin_app')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endsection

@section('main')
<div class="container py-5">
    <a class="btn btn-success" href="/admin/report/create">新增媒體報導</a>
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
            @foreach ($reports as $report)
            <tr>
                <td>{{$report->title}}</td>
                <td>{{$report->date}}</td>
                <td>{{$report->content}}</td>
                <td><img width="200" src="{{$report->img}}" alt=""></td>
                <td>
                    <a class="btn btn-success" href="/admin/report/edit/{{$report->id}}">編輯</a>
                    <a class="btn btn-danger" href="/admin/report/destroy/{{$report->id}}">刪除</a>
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
