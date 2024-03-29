@extends('layouts/fullLayoutMaster')

@section('title', 'Login Page')


@section('content')
<section class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 my-5">

        <div class="card">
          <div class="card-header text-uppercase text-center"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>

          <div class="card-body">
            @isset($url)
              <form method="POST" action='{{ url("$url/login") }}' aria-label="{{ __('Login') }}">
                @else
                  <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @endisset
              @csrf

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('error')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('error')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                      {{ __('Remember Me') }}
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary ">
                    {{ __('Login') }}
                  </button>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
