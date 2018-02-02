@extends('layouts.app')

@section('content')

<<<<<<< HEAD
<section class="hero is-success is-fullheight">
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
            <a href="../">Sign Up</a> &nbsp;·&nbsp;
            <a href="../">Forgot Password</a> &nbsp;·&nbsp;
            <a href="../">Need Help?</a>
          </p>
=======
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Login
                </h1>
            </div>
        </div>
    </section>

    <div class="columns is-marginless is-centered">
        <div class="column is-6">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Login</p>
                </header>

                <div class="card-content">
                  <form action="{{route('login')}}" method="POST" role="form">
                    {{csrf_field()}}
                    <div class="field">
                      <label for="email" class="label">Email Address</label>
                      <p class="control has-icons-left">
                        <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
                        <span class="icon is-small is-left">
                          <i class="fa fa-envelope"></i>
                        </span>
                      </p>
                      @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                      @endif
                    </div>
                    <div class="field">
                      <label for="password" class="label">Password</label>
                      <p class="control has-icons-left">
                        <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password">
                        <span class="icon is-small is-left">
                          <i class="fa fa-lock"></i>
                        </span>
                      </p>
                      @if ($errors->has('password'))
                        <p class="help is-danger">{{$errors->first('password')}}</p>
                      @endif

                    </div>

                    <b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>

                    <div class="columns p-t-30">
                      <div class="column">
                        <button class="button is-success is-outlined is-fullwidth">Log In</button>
                      </div>
                      <div class="column">
                        <a href="{{route('register')}}" class="button is-default is-outlined is-fullwidth">Don't Have any Account?</a>
                      </div>
                    </div>
                  </form>
                </div> <!-- end of .card-content -->
              </div> <!-- end of .card -->
              <h5 class="has-text-centered m-t-20">
                <a href="{{route('password.request')}}" class="is-muted">Forgot Your Password?</a>
              </h5>
>>>>>>> 9aaccbd09895f5069b1e8955c744f1e2faa23009
        </div>
      </div>
    </div>
    </section>
@endsection
