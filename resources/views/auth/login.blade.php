@extends('layouts.app')

@section('content')
<section class="hero">
  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="column is-4 is-offset-4">
        <h3 class="title has-text-grey">Login</h3>
        <p class="subtitle has-text-grey">Please login to proceed.</p>
        <div class="box">
          <figure class="avatar">
            <img src="https://placehold.it/128x128">
          </figure>
          <form class="login-form" method="POST" action="{{ route('login') }}">
                      {{ csrf_field() }}
            <div class="field">
              <div class="control">
                <input class="input is-large" id="email" type="email" placeholder="Your Email" name="email"
                                             value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                                      <p class="help is-danger">
                                          {{ $errors->first('email') }}
                                      </p>
                                  @endif
              </div>
            </div>

            <div class="field">
              <div class="control">
                <input class="input is-large" type="password" placeholder="Your Password" required>
                @if ($errors->has('password'))
                                      <p class="help is-danger">
                                          {{ $errors->first('password') }}
                                      </p>
                                  @endif
              </div>
            </div>
            <div class="field">
              <label class="checkbox">
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </label>
            </div>
            <a class="button is-block is-info is-large">Login</a>
          </form>
        </div>
        <p class="has-text-grey">
          <a href="{{ route('register') }}">Sign Up</a>
          <br>
          <a href="{{ route('password.email') }}">Forgot Password</a>
        </p>
      </div>
    </div>
  </div>
</section>
@endsection
