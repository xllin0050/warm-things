    @extends('layouts.template')
    <title>登入</title>
    @section('css')
    <link rel="stylesheet" href="/css/06-userLogin.css">
    @endsection
    @section('main')
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registered</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="group">
                        <label for="user" class="label">帳號</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                    <div class="group">
                        <label for="pass" class="label">密碼</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="登入">
                    </div>
                    </form>

                </div>
                <div class="sign-up-htm">
                    <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="group">
                        <label for="name" class="label">姓名</label>
                        
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div> 
                    
                    <div class="group">
                        <label for="pass" class="label">電子信箱</label>


                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="group">
                        <label for="pass" class="label">密碼</label>
                        {{-- <input id="pass" type="password" class="input" data-type="password"> --}}

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                    </div>
                    <div class="group">
                        <label for="check-pass" class="label">確認密碼</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="註冊">
                    </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="login-html">
            <label class="tab">forgot password</label>
            <div class="login-form">
                <div class="forgot-password-htm">
                    <div class="group">
                        <label for="pass" class="label">電子信箱</label>
                        <input id="pass" type="text" class="input">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="送出">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('js')
        
    @endsection
