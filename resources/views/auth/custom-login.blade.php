@extends('layouts.app')

@section('content')

<input type="hidden" id="anPageName" name="page" value="authentication-login" />
<div class="container-center-horizontal">
    <div class="authentication-login screen">
        <div class="overlap-group-C61RwL">
            <div class="background-header-big-4eduM0"></div>
            <a href="{{ url('login') }}">
                <div class="login-4eduM0">Login</div>
            </a>
            <a href="{{ url('seller') }}">
                <div class="registo-4eduM0">Registo</div>
            </a>
            <div class="line-red-4eduM0">

            </div>
            <div class="logo-4eduM0 container">
                <img class="mx-auto logo-img-9mfXOU" src="{{ url('assets/img/logo.svg') }}" /></div>
        </div>
        <form action="{{ route('login.custom') }}" method="POST">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @csrf
            <div class="imput-100-C61RwL">
                <input class="imput-100-i20343111253-ETfRnS {{ $errors->has('email') ? 'is-invalid' : '' }}"
                    name="email" placeholder="E-mail" type="email" required />
            </div>
            <div class="imput-100-VMr6Om">
                <input class="imput-100-i20343411253-UppLul {{ $errors->has('password') ? ' is-invalid' : '' }}"
                    name="password" placeholder="Senha" type="password" required />
            </div>
            <div class="btn-generic-C61RwL">
                <button type="submit" class="text-btn-generic-i203437226-Sts0rK">Login</button>
            </div>
        </form>
        <div class="esqueceu-a-senha-C61RwL">Esqueceu a senha?</div>
    </div>
</div>
@endsection



















{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}
</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}