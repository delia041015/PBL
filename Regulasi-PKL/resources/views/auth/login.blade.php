@extends('layouts.template')

<title>Sign In PKL</title>

@section('content')
<body class="" id="body">
    <div class="container d-flex align-items-center justify-content-center vh-100">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="card">
            <div class="card-header" style="background-color: #2d2766">
              <div class="app-brand">
                <a href="/index.html">
                  <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33"
                    viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                      <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                      <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                  </svg>

                  <span class="brand-name">Regulasi PKL MI</span>
                </a>
              </div>
            </div>

            <div class="card-body p-5">
              <h4 class="text-dark mb-5">Sign In</h4>
              
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input type="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="email" name="email">
                    @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                  </div>

                  <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" id="password" placeholder="Password" name="password">
                    @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex my-2 justify-content-between">
                      <div class="d-inline-block mr-3">
                        <label class="control control-checkbox">Remember me
                          <input type="checkbox" />
                          <div class="control-indicator"></div>
                        </label>
                      </div>

                      <p><a class="text-blue" href="#">Forgot Your Password?</a></p>
                    </div>

                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>

                    <p>Don't have an account yet ?
                      <a class="text-blue" href="{{route('signUp')}}">Sign Up</a>
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection