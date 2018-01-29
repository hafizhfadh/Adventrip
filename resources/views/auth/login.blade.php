@extends('layouts.app')

@section('content')

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
        </div>
    </div>
@endsection
