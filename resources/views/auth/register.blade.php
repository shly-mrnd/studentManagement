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
                              <a class="nav-link" id="tab-login" data-mdb-toggle="pill" href="{{route('login')}}" role="tab"
                                aria-controls="pills-login" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link {{Route::currentRouteName() == 'auth.register' ? 'active' : ' '}}" id="tab-register" data-mdb-toggle="pill" href="" role="tab"
                                aria-controls="pills-register" aria-selected="false">Register</a>
                            </li>
                          </ul>
                    </div>
                    <div class="card-body bg-light ">
                      <form method="POST" action="">
                        @csrf

                        <div class="row">

                            <div class="col-lg-4">
                                <!--Begin input name -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="stID" class="form-control form-control-lg" name="stID" value="" />
                                    <label class="col-form-label text-md-end" for="stID">{{ __('Student ID') }}</label>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <!--Begin input name -->
                                <div class="form-outline mb-8">
                                    <input id="name" type="text" class="form-control form-control-lg" name="name" value="">
                                    <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <!--Begin input email -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" class="form-control form-control-lg" name="email" value="" />
                                    <label class="col-form-label text-md-end" for="email">{{ __('Email') }}</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <!--Begin input phone number -->
                                <div class="form-outline mb-8">
                                    <input type="text" id="phoneNum" class="form-control form-control-lg" name="phoneNum" value="" />
                                    <label class="col-form-label text-md-end" for="phoneNum">{{ __('Phone Number') }}</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <!--Begin input address -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="address" class="form-control form-control-lg" name="address" value="" />
                                    <label class="col-form-label text-md-end" for="address">{{ __('Address') }}</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <!--Begin input DOB -->
                                <div class="form-outline mb-8">
                                    <input type="text" id="dob" class="form-control form-control-lg" name="dob" value="" />
                                    <label class="col-form-label text-md-end" for="dob">{{ __('Date of Birth') }}</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-12">
                                <!--Begin input address -->
                                <div class="form-outline mb-4">
                                    <select class="form-select form-select-lg" name="prog" aria-label="Large select example">
                                        <option selected>Select Program</option>
                                        <option value="1">BS in Information Technology</option>
                                        <option value="2">BS in Computer Science</option>
                                        <option value="3">BS in Information System</option>
                                      </select>
                                    <label class="col-form-label text-md-end" for="address">{{ __('Program') }}</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <!--Begin input address -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="contact" class="form-control form-control-lg" name="contact" value="" />
                                    <label class="col-form-label text-md-end" for="contact">{{ __('Contact in case of emergency') }}</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <!--Begin input DOB -->
                                <div class="form-outline mb-8">
                                    <input type="text" id="contactNum" class="form-control form-control-lg" name="contactNum" value="" />
                                    <label class="col-form-label text-md-end" for="contactNum">{{ __('Contact Number') }}</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <!--Begin input personal information -->
                                <div class="form-outline mb-8">
                                    <input type="text" id="username" class="form-control form-control-lg" name="username" value="" />
                                    <label class="col-form-label text-md-end" for="username">{{ __('Username') }}</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <!--Begin input password -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="pass" class="form-control form-control-lg" name="pass" value="" />
                                    <label class="col-form-label text-md-end" for="pass">{{ __('Password') }}</label>
                                </div>
                            </div>

                        </div>


                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary w-100 ">{{ __('REGISTER') }}</button>
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
