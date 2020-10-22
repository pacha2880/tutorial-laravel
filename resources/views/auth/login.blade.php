@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto">
            <div class="card-body">
                <form   class="bg-white shadow rounded py-3 px-4"
                        method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1 class="display-4">{{ __('Login') }}</h1>
                    <hr>
                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" 
                            class="form-control bg-light shadow-sm
                                    @error('email') is-invalid @else border-0 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" 
                            class="form-control bg-light shadow-sm 
                                    @error('password') is-invalid @else border-0 @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
