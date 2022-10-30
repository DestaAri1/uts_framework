@extends('auth.master')

@section('judul_halaman', 'Halaman Login')

@section('konten')

<div class="limiter">
    <div class="container-login100" style="background-image: url('{{asset('style2/assets/images/bg-01.jpg')}}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
                @csrf
                <span class="login100-form-title p-b-49">
                    Login
                </span>

                <div class="wrap-input100 validate-input m-b-23">
                    <span class="label-input100">Email</span>
                    <input class="input100" placeholder="Type Your Email" id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="text-right p-t-8 p-b-31">
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                </div>

                <div class="flex-col-c p-t-100">
                    <span class="txt1 p-b-17">
                        Belum punya akun?
                    </span>

                    <a href="{{ route('register') }}" class="txt2">
                        Registrasi
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
