<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - CyberSoft</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.admin.includes.css')
    <style>
        .nk-int-st input[type="email"]{
            box-shadow: none;
            border-top: 0px solid #ccc;
            border-left: 0px solid #ccc;
            border-right: 0px solid #ccc;
            border-bottom: 1px solid #ccc;
            padding: 0px;
            resize: none;
            border-radius: 0px;
        }
    </style>
</head>

<body>
    <div class="login-content">
        <div class="nk-block toggled" id="l-login">
            <div class="nk-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                        <div class="nk-int-st">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Username" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="input-group mg-t-15">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                        <div class="nk-int-st">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="fm-checkbox">
                        <label><input type="checkbox" class="i-checks" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> <i></i> Keep me signed in</label>
                    </div>
                    <div class="mg-t-15">
                        <div class="btn-demo-notika">
                            <button type="submit" class="btn btn-success notika-btn-success waves-effect">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Login Register area End-->
</body>

</html>