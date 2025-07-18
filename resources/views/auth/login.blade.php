<!-- 
@extends('layouts.auth')

@section('title')
  {{ __('Login') }}
@endsection

@section('header')
  <div class="text-center mt-4">
    <h1 class="h2">{{ __('Welcome back') }}</h1>
    <p class="lead">
      {{ __('Sign in to your account to continue') }}
    </p>
  </div>
@endsection

@section('content')
  <x-auth-session-status class="mb-4" :status="session('status')" />
  <section class="card">
    <div class="card-body">
      <div class="m-sm-4">
       
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="mb-3">
            <label class="form-label">{{ __('Email') }}</label>
            <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
          </div>
          <div class="mb-3">
            <label class="form-label">{{ __('Password') }}</label>
            <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
          </div>
          <div class="row g-3">
            <div class="col">
              <label class="form-check">
                <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
                <span class="form-check-label">{{__('Remember me')}}</span>
              </label>
            </div>
            <div class="col">
              @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">{{__('Forgot password?')}}</a>
              @endif
            </div>
          </div>
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-lg btn-primary">{{ __('Sign in') }}</button>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection -->

@extends('layouts.auth')

@section('title')
  {{ __('Login') }}
@endsection

@section('header')
  <div class="text-center mt-4">
    <h1 class="h2">{{ __('Welcome back') }}</h1>
    <p class="lead">
      {{ __('Sign in to your account to continue') }}
    </p>
  </div>
@endsection

@section('content')
  <!-- Full Page Row -->
  <div class="row vh-100 g-0">
    <!-- Left Side - Login Form -->
    <div class="col-lg-6 d-flex flex-column justify-content-center">
      <div class="p-5">
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <section class="card shadow-sm">
          <div class="card-body">
            <div class="m-sm-4">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                  <label class="form-label">{{ __('Email') }}</label>
                  <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" required autofocus />
                </div>
                <div class="mb-3">
                  <label class="form-label">{{ __('Password') }}</label>
                  <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" required autocomplete="current-password" />
                </div>
                <div class="row g-3">
                  <div class="col">
                    <label class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <span class="form-check-label">{{__('Remember me')}}</span>
                    </label>
                  </div>
                  <div class="col text-end">
                    @if (Route::has('password.request'))
                      <a href="{{ route('password.request') }}">{{__('Forgot password?')}}</a>
                    @endif
                  </div>
                </div>
                <div class="text-center mt-3">
                  <button type="submit" class="btn btn-lg btn-primary">{{ __('Sign in') }}</button>
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!-- Right Side - Image -->
    <div class="col-lg-6 d-none d-lg-block bg-light position-relative">
      <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
        <h2 class="fw-bold">Your Brand or Tagline</h2>
        <p class="lead">Something inspiring goes here.</p>
      </div>
      <img src="https://unsplash.com/photos/a-person-swimming-in-the-ocean-surrounded-by-seaweed-numwIW6i8Iw" alt="Login Background" class="img-fluid h-100 w-100 object-fit-cover">
    </div>
  </div>
@endsection