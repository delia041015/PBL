@extends('layouts.template')


<title>Sign Up PKL</title>

@section('content')

<body class="" id="body">
    <div class="container d-flex align-items-center justify-content-center vh-100">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="card">
            <div class="card-header bg-primary">
              <div class="app-brand">
                <a href="/index.html">
                  <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                    height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                      <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                      <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                  </svg>

                  <span class="brand-name">Regulasi PKL MI</span>
                </a>
              </div>
            </div>

            <div class="card-body p-4">
              <h4 class="text-dark mb-4">Sign Up</h4>

              <form  method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                  <div class="form-group col-md-12 mb-4 col-12">
                    <input type="text" class="form-control input-lg" id="name" aria-describedby="nameHelp" placeholder="Name" name="name">
                    @error('name')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror  
                  </div>

                  <div class="form-group col-md-12 mb-4 col-12">
                    <input type="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="email" name="email">
                    @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                  </div>

                  <div class="form-group col-md-12 col-12">
                    <input type="password" class="form-control input-lg" id="password" placeholder="Password" name="password">
                    @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="col-md-12 col-12">
                   

                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign Up</button>

                    <p>Already have an account?
                      <a class="text-blue" href="{{route('signIn')}}">Sign in</a>
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