    @extends('layouts.template')
    <title>登入</title>
    @section('css')
    <link rel="stylesheet" href="/css/06-userLogin.css">
    @endsection
    @section('main')
    <div class="login-wrap">
        <div class="login-html" id="login">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registered</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="group">
                            <label for="email" class="label">電子信箱</label>
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

                        <label class="tab">forgot password</label>
                        <div class="group">
                            <label for="email" class="label">電子信箱</label>
                            <input id="text" type="test" class="input" name="text">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="送出">
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
                            <label for="email" class="label">電子信箱</label>
                            
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        </div>
                        <div class="group">
                            <label for="password" class="label">密碼</label>
                            
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="group">
                            <label for="password-confirm" class="label">確認密碼</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="right">
                            <div class="group">
                                <label for="zip" class="label">郵遞區號</label>
                                <input id="zip" type="text" class="input" name="zip">
                            </div><div class="group">
                                <label for="address" class="label">地址</label>
                                <input id="address" type="text" class="input" name="address">
                            </div><div class="group">
                                <label for="phone" class="label">電話</label>
                                <input id="phone" type="tel" class="input" name="phone">
                            </div>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="註冊">
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('js')
        
    @endsection
