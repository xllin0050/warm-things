@extends('layouts.app')

@section('css')
    <style>
        .image_area{
            position: relative;
        }

        .del_btn{
            position: absolute;
            top: 0;
            right:0;
            width: 35px;
            height: 35px;
            transform: translate(30%, 30%);
        }
    </style>
@endsection

@section('main')
    <div class="container">
        <h2>編輯媒體報導</h2>
        <hr>
        <form action="/admin/report/update/{{$reports->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label class="col-2" for="title">標題</label>
              <input  type="text" class="form-control col-10" class="form-control" id="title" name="title" value="{{$reports->title}}"required>
            </div>
            <div class="form-group row">
              <label class="col-2" for="date">日期</label>
              <input type="date" class="form-control col-10" id="date" name="date" value="{{$reports->date}}"required>
            </div>
            <div class="form-group row">
                <label class="col-2" for="content">內文</label>
                <input type="text" class="form-control col-10" id="content" name="content" value="{{$reports->content}}"required>
            </div>
            <div class="form-group row">
                <label class="col-2" for="img">目前圖片</label>
                <img src="{{$reports->img}}" alt="" width="200">
            </div>
            <div class="form-group row">
                <label class="col-2" for="img">重新上傳圖片</label>
                <input type="file" class="form-control col-10" id="img" name="img" value="{{$reports->img}}">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">送出</button>
          </form>
    </div>
@endsection

@section('js')
{{-- <script>
    // 取得刪除鈕的元素
    var del_btns=document.querySelectorAll('.del_btn');
    // 綁定監聽事件
    del_btns.forEach(function(del_btn){
        del_btn.onclick = function(){
            var id=this.getAttribute('data-id');
            var _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            var formData = new FormData();
            formData.append('id',id);
            formData.append('_token=',_token);


            fetch('/admin/product/delete_img', {
            method: 'POST',
            body: formData,
            // Other setting you need
            // Don't set 'Content-Type': 'multipart/form-data'
            })
            .then(response =>this.parentElement.remove())

            .catch(error => console.error('Error:',error));
                // Handle error here.
        }

    });

</script> --}}
@endsection
