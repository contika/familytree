@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>
                                Family Tree Application
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lacus mauris, dapibus quis vestibulum ac, tincidunt eget nibh. Duis eu sem in nulla dignissim vestibulum at sed eros. Vestibulum interdum pulvinar sapien sed sollicitudin. Nullam non diam quam. Donec eget risus at lacus dignissim dignissim. Mauris a mauris fermentum, tincidunt elit vitae, bibendum lacus. In mollis, augue non commodo vehicula, orci eros tristique purus, vel egestas ipsum orci eu sem. Pellentesque non odio id libero consequat convallis. Etiam lacinia nibh ut augue tristique, ut porta orci hendrerit. Aenean condimentum velit magna, quis hendrerit augue pellentesque a. Donec scelerisque commodo nibh, et facilisis mi dictum at. Ut et urna sollicitudin, auctor augue vel, tincidunt nisl. Praesent sagittis urna at felis porta, ornare gravida sapien elementum. Nulla facilisi. Proin nisi enim, pulvinar vitae massa pretium, scelerisque gravida odio.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="card text-white bg-primary">
                                <div class="card-header">{{ __('Login to continue') }}</div>
                                <div class="card-body bg-white text-dark">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
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
                </div>
            </div>
        </div>
    </div>
@endsection