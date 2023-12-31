<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Student Management System'}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/student-manage.css')}}">

    </head>
    <body class="position-absolute top-50 start-50 translate-middle">

        <div class="content">
            <div class="container">
                <div class="row">
                  <div class="col-md-5 ml-auto">
                    <div class="mt-5">
                      <div class="">
                        <h1 class="text-center"><strong>{{ __('Student Management System') }}</strong></h1>
                      </div>
                    </div>
                    <div class="mt-4">
                      <div class="text-center">
                          <img src="/src/CSU_logo.png" alt="" style="max-width: 20%">
                          <img src="/src/cict-logo.png" alt="" style="max-width: 25%">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mr-auto">
                    <div class="card card-signup text-center">
                      <div class="bg-light">
                          <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                              <li class="nav-item" role="presentation">
                                <a class="nav-link {{Route::currentRouteName() == 'auth.login' ? 'active' : ' '}}" id="tab-login" data-mdb-toggle="pill" href="" role="tab"
                                  aria-controls="pills-login" aria-selected="true">Login</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="{{route('auth.register')}}" role="tab"
                                  aria-controls="pills-register" aria-selected="false">Register</a>
                              </li>
                            </ul>
                      </div>
                      <div class="card-body bg-light ">
                        <form method="POST" action="{{route('auth.login')}}">
                          @if (Session::has('success'))
                              <div class="alert alert-success">{{Session::get('success')}}</div>
                          @endif
                          @if (Session::has('fail'))
                              <div class="alert alert-danger">{{Seesion::get('fail')}}</div>
                          @endif

                          @csrf
                          <!--Begin input email -->
                          <div class="form-outline mb-4">
                              <input type="text" id="username" name="username" class="form-control form-control-lg fs-5 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" />
                              <span class="text-danger">@error('username') {{$message}} @enderror</span>
                              <br>
                              <label class="col-form-label" for="username">{{ __('Username') }}</label>
                            </div>

                          <!--Begin input password -->
                          <div class="form-outline mb-4">
                              <input type="password" id="password" class="form-control form-control-lg fs-5 @error('password') is-invalid @enderror" name="password" value="" />
                              <span class="text-danger">@error('password') {{$message}} @enderror</span>
                              <br>
                              <label class="col-form-label text-md-end" for="password">{{ __('Password') }}</label>
                            </div>


                          <div class="pt-4">
                              <button onclick="" class="btn btn-primary w-100 ">{{ __('LOGIN') }}</button>
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
