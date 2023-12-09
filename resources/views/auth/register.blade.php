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
    <body class="py-5 h-100">

        <div class="content">
            <div class="container">

                <div class="button-container text-center">
                    <div class="row">
                        <!--Email-->
                        <div class="col-lg-3 col-md-6 col-6 mx-auto">
                            <img src="/src/CSU_logo.png" alt="" style="max-width: 20%">
                        </div>
                        <!--Username-->
                        <div class="col-lg-6 col-md-6 col-6 mx-auto">
                            <h2 class="title text-center">{{ __('Student Management System') }}</h2>
                        </div>
                        <div class="col-lg-3 mx-auto">
                            <img src="/src/cict-logo.png" alt="" style="max-width: 25%">
                        </div>
                    </div>
                </div>
              <div class="row p-4">
                <div class="col-8 mx-auto">
                  <div class="card card-signup text-center">
                    <div class="bg-light">
                        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="tab-login" data-mdb-toggle="pill" href="{{route('auth.login')}}" role="tab"
                                aria-controls="pills-login" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link {{Route::currentRouteName() == 'auth.register' ? 'active' : ' '}}" id="tab-register" data-mdb-toggle="pill" href="" role="tab"
                                aria-controls="pills-register" aria-selected="false">Register</a>
                            </li>
                          </ul>
                    </div>
                    <div class="card-body bg-light ">
                      <form method="POST" action="{{route('auth.register')}}">
                        @csrf

                        <div class="row">

                            <div class="col-lg-4">
                                <!--Begin input student id -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="student_id" class="form-control form-control-lg @error('student_id') is-invalid @enderror" placeholder="e.g. 2019-05487" name="student_id" value="{{old('student_id')}}" />
                                    <span class="text-danger">@error('student_id') {{$message}} @enderror</span>
                                    <br>
                                    <label class="col-form-label text-md-end" for="student_id">{{ __('Student ID') }}</label>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <!--Begin input name -->
                                <div class="form-outline mb-8">
                                    <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{old("name")}}">
                                    <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                    <br>
                                    <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <!--Begin input email -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{old("email")}}" />
                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                    <br>
                                    <label class="col-form-label text-md-end" for="email">{{ __('Email') }}</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <!--Begin input phone number -->
                                <div class="form-outline mb-8">
                                    <input type="text" id="phone_number" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{old("phone_number")}}" />
                                    <span class="text-danger">@error('phone_number') {{$message}} @enderror</span>
                                    <br>
                                    <label class="col-form-label text-md-end" for="phone_number">{{ __('Phone Number') }}</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <!--Begin input address -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="address" class="form-control form-control-lg @error('address') is-invalid @enderror" name="address" value="{{old('address')}}" />
                                    <span class="text-danger">@error('address') {{$message}} @enderror</span>
                                    <br>
                                    <label class="col-form-label text-md-end" for="address">{{ __('Address') }}</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <!--Begin input DOB -->
                                <div class="form-outline mb-8">
                                    <input type="date" id="dob" class="form-control form-control-lg @error('dob') is-invalid @enderror" name="dob" value="{{old('dob')}}" />
                                    <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                                    <br>
                                    <label class="col-form-label text-md-end" for="dob">{{ __('Date of Birth') }}</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-12">
                                <!--Begin input address -->
                                <div class="form-outline mb-4">
                                    <select class="form-select form-select-lg @error('program') is-invalid @enderror" name="program" aria-label="Large select example" value="{{old('program')}}">
                                        <option value="BSIT">BS in Information Technology</option>
                                        <option value="BSCS">BS in Computer Science</option>
                                        <option value="BSIS">BS in Information System</option>
                                      </select>
                                      <span class="text-danger">@error('program') {{$message}} @enderror</span>
                                      <br>
                                    <label class="col-form-label text-md-end" for="address">{{ __('Program') }}</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <!--Begin input address -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="contact" class="form-control form-control-lg @error('contact') is-invalid @enderror" name="contact" value="{{old('contact')}}" />
                                    <span class="text-danger">@error('contact') {{$message}} @enderror</span>
                                    <br>
                                    <label class="col-form-label text-md-end" for="contact">{{ __('Contact in case of emergency') }}</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <!--Begin input DOB -->
                                <div class="form-outline mb-8">
                                    <input type="text" id="contact_number" class="form-control form-control-lg @error('contact_number') is-invalid @enderror" name="contact_number" value="{{old('contact_number')}}" />
                                    <span class="text-danger">@error('contact_number') {{$message}} @enderror</span>
                                    <br>
                                    <label class="col-form-label text-md-end" for="contact_number">{{ __('Contact Number') }}</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-4">
                                <!--Begin input personal information -->
                                <div class="form-outline mb-8">
                                    <input type="text" id="username" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{old('username')}}" />
                                    <span class="text-danger">@error('username') {{$message}} @enderror</span>
                                    <br>
                                    <label class="col-form-label text-md-end" for="username">{{ __('Username') }}</label>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <!--Begin input password -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" value="{{old('password')}}" />
                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                    <br>
                                    <label class="col-form-label text-md-end" for="password">{{ __('Password') }}</label>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <!--Confirm Password -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="password_confirmation" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{old('password')}}" />
                                    <span class="text-danger">@error('password_confirmation') {{$message}} @enderror</span>
                                    <br>
                                    <label class="col-form-label text-md-end" for="password_confirmation">{{ __('Confirm Password') }}</label>
                                </div>
                            </div>

                        </div>


                        <div class="pt-4">
                            <button onclick="" type="submit" class="btn btn-primary w-100 ">{{ __('REGISTER') }}</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script>
            var cur_date = new Date();
            var year = cur_date.getUTCFullYear();
            var month = cur_date.getMonth() + 1;
            var today = cur_date.getDate();

            if (month <= 9) {
                month = "0" + month;
            }
            if (today <= 9) {
                today = "0" + today;
            }
            var max_date = year + "-" + month + "-" + today;
            document.getElementById('dob').setAttribute('max', max_date);
        </script>

        <script src="{{asset('js/bootstrap.min.js')}}"></script>

    </body>
</html>
