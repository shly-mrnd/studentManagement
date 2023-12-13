<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/student-manage.css')}}">
</head>
<body>
    <div class="d-flex align-item-center justify-content-center" style="height: 100vh">
        <div class="col-md-3 text-center" style="max-width: 400px;">
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
                            <h5> <label class="fs-6">I.D NO.</label>{{Auth::user()->student_id}}</h5>
                        </div>
                        <div class="flex flex-col items-center">
                            <h5 class="mt-0 text-primary"><strong>{{Auth::user()->name}}</strong></h5>
                            <label class="mt-0 fs-6">NAME OF STUDENT</label>
                        </div>
                        <br>
                        <div>
                            <label class="mt-0 fs-6">STUDENT SIGNATURE</label>
                        </div>
                        <div class="w-100 d-flex flex-column align-items-center">
                            <h5 class="text-center mx-1 bg-primary w-100 font-bold text-white fs-5">
                                @php
                                $program = Auth::user()->program;
                                $programVer = '';
                                if ($program === 'BSIT') {
                                    $programVer = 'BS in Information Technology';
                                } elseif ($program === 'BSIS') {
                                    $programVer = 'BS in Information System';
                                } elseif ($program === 'BSCS') {
                                    $programVer = 'BS in Computer Science';
                                }
                            @endphp
                                <strong>{{$programVer}}</strong>
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
                <div>
                    <div class="button-container">
                        <div class="d-flex justify-content-center">
                            <div class="text-center">
                                <a href="{{Route('printID')}}" type="submit" class="btn btn-default w-100">{{ __('Print ID') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

