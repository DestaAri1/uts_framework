@extends('auth.master')

@section('judul_halaman', 'Halaman Register')

@section('konten')

<div class="limiter">
    <div class="container-login100" style="background-image: url('{{asset('style2/assets/images/bg-01.jpg')}}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" action="{{route('register')}}" method="POST">
                @csrf
                <span class="login100-form-title p-b-49">
                    Registrasi
                </span>

                <div class="wrap-input100 validate-input m-b-23">
                    <input id="name" placeholder="Username" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input m-b-23">
                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input m-b-23">
                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input m-b-23">
                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Simpan
                        </button>
                    </div>
                </div>

                <div class="flex-col-c p-t-100">
                    <span class="txt1 p-b-17">
                        Sudah punya akun?
                    </span>

                    <a href="{{ route('login') }}" class="txt2">
                        Sign In
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
