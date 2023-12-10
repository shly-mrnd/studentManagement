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
                <div class="col-md-4 text-center" style="max-width: 400px;">
                    <div class="d-flex flex-column align-items-center md-mt-0">
                        <div class="card shadow-lg rounded-lg">
                            <!--upper ID-->
                            <div class="bg-info rounded-top py-3 d-flex flex-row">
                                <!--logo-->
                                <div class="bg-warning px-2 d-flex justify-content-center align-items-center">
                                    <img src="/src/CSU_logo.png" alt="" class="img-fluid h-auto w-auto mx-auto" style="max-height: 75px; max-width: 75px;">
                                </div>
                                <div class="bg-warning flex-grow-1 d-flex flex-column justify-content-between align-items-center">
                                    <div class="d-flex flex-column align-items-center pt-2">
                                        <label class="m-0 fs-6">REPUBLIC OF THE PHILLIPINES</label>
                                        <h6 class="m-0 fw-bold">CATANDUANES STATE UNIVERSITY</h6>
                                        <label class="m-0 fs-6">VIRAC, CATANDUANES</label>
                                    </div>
                                </div>
                            </div>
                            <!--body ID-->
                            <div class="flex flex-col items-center">
                                <div class="my-1 d-flex justify-content-center align-items-center">
                                    <img src="/src/user.png" alt="" class="rounded-circle img-fluid object-contain bg-gray-200 py-2 h-24 w-24" style="max-height: 100px; max-width: 100px;">
                                </div>
                                <div>
                                    <h5> <label class="fs-6">I.D NO.</label>{{$user->student_id}}</h5>
                                </div>
                                <div class="flex flex-col items-center">
                                    <h5 class="mt-0 text-primary"><strong>{{$user->name}}</strong></h5>
                                    <label class="mt-0 fs-6">NAME OF STUDENT</label>
                                </div>
                                <br>
                                <div>
                                    <label class="mt-0 fs-6">STUDENT SIGNATURE</label>
                                </div>
                                <div class="w-100 d-flex flex-column align-items-center">
                                    <h5 class="text-center mx-1 bg-primary w-100 font-bold text-white fs-5">
                                        <strong>{{$user->program}}</strong>
                                    </h5>
                                    <label class="mt-0 fs-6">COURSE</label>
                                </div>
                            </div>
                            <!--footer ID-->
                            <div class="flex flex-col items-center">
                                <br>
                                <div class="pb-3 flex flex-col items-center">
                                    <h6 class="m-0 fs-5"><strong>MARILYN G. TEJADA</strong></h6>
                                    <label class="m-0 fs-6">REGISTRAR III</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{asset('js/bootstrap.min.js')}}"></script>

    </body>
</html>
