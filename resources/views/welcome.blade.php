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
                <div class="col-md-6 mr-auto" style="margin-top: 8%;">
                  <div class=" text-center">
                    <div class="card-body bg-white ">
                      {{-- <form method="POST" action="{{route('auth.login')}}">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if (Session::has('fail'))
                            <div class="alert alert-danger">{{Seesion::get('fail')}}</div>
                        @endif

                        @csrf
                        <!--Begin input email -->
                        <div class="form-outline mb-4">
                            <input type="text" id="username" name="username" value="{{old('username')}}" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" />
                            <label class="col-form-label" for="username">{{ __('Username') }}</label>
                          </div>

                        <!--Begin input password -->
                        <div class="form-outline mb-4">
                            <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" value="" />
                            <label class="col-form-label text-md-end" for="password">{{ __('Password') }}</label>
                          </div>


                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary w-100 ">{{ __('LOGIN') }}</button>
                        </div>
                      </form> --}}
                      <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="pt-4">
                                <a href="{{route('auth.login')}}" type="submit" class="btn btn-primary fs-4 ">{{ __('LOGIN') }}</a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="pt-4">
                                <a href="{{route('auth.register')}}" type="submit" class="btn btn-info fs-4 ">{{ __('REGISTER') }}</a>
                            </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </body>
</html>
