<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>{{ $title ?? 'Student Management System'}}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/student-manage.css')}}"> --}}

    </head>
    <body class="position-absolute top-50 start-50 translate-middle">

        <div class="content">
            <div class="container">
              <div class="row">
                <div class="col-md-5 ml-auto">
                  <div class="mt-5">
                    <div class="">
                      <h1 class="text-center">{{ __('Student Management System') }}</h1>
                    </div>
                  </div>
                  <div class="mt-4">
                    <div class="text-center">
                        <img src="/src/CSU_logo.png" alt="" style="max-width: 20%">
                        <img src="/src/cict-logo.png" alt="" style="max-width: 25%">
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mr-auto">
                  <div class="card card-signup text-center">
                    <div class="bg-light">
                        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="" role="tab"
                                aria-controls="pills-login" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="" role="tab"
                                aria-controls="pills-register" aria-selected="false">Register</a>
                            </li>
                          </ul>
                    </div>
                    <div class="card-body bg-light ">
                      <form method="POST" action="">
                        @csrf
                        <!--Begin input email -->
                        <div class="form-outline mb-8">
                            <input type="email" id="emailAd" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" />
                            <label class="col-form-label text-md-end" for="emailAd">{{ __('Email Address') }}</label>
                          </div>

                        <!--Begin input password -->
                        <div class="form-outline mb-4">
                            <input type="password" id="pass" class="form-control form-control-lg @error('pass') is-invalid @enderror" name="pass" value="{{ old('pass') }}" />
                            <label class="col-form-label text-md-end" for="pass">{{ __('Password') }}</label>
                          </div>
                        <!--Begin input user type-->

                        <div class="form-check text-left">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="form-check-sign"></span>
                            {{ __('Remember Me') }}
                          </label>
                        </div>
                        <a class="form-check" href="">Forgot password?</a>
                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary w-100 ">{{ __('LOGIN') }}</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </body>
</html>
