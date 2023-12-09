@extends('layouts.app', ['title' => 'Profile'])

@section('content')

    <div class="content">
        <div class="row">

            <div class="col-md-6">
                <div class="card p-4">
                    <div class="card-body">

                        <h4 class="title text-center">Profile</h4>

                        <div class="author">
                            <div class="mx-auto">
                                <h6 class="title text-primary">School ID</h6>
                                <h5 class="description"><strong>{{ $user->student_id}}</strong></h5>
                            </div>
                        </div>
                        <hr>

                        <div class="author">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6 col-6 mx-auto">
                                    <h6 class="title text-primary">Name</h6>
                                    <h5 class="description"><strong>{{ $user->name }}</strong></h5>
                                </div>

                                @php
                                $program = '';
                                if ($user->program === 'BSIT') {
                                    $program = 'BS in Information Technology';
                                } elseif ($user->program === 'BSIS') {
                                    $program = 'BS in Information System';
                                } elseif ($user->program === 'BSCS') {
                                    $program = 'BS in Computer Science';
                                }
                            @endphp
                                <div class="col-lg-6 mx-auto">
                                    <h6 class="title text-primary">Program</h6>
                                    <h5 class="description"><strong>{{ $program }}</strong></h5>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="author">
                            <div class="row">
                                <div class="col-lg-8 col-md-6 col-6 mx-auto">
                                    <h6 class="title text-primary">Address</h6>
                                    <p class="description"><strong>{{ $user->address}}</strong></p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-6 mx-auto">
                                    <h6 class="title text-primary">Date of Birth</h6>
                                    <h5 class="description"><strong>{{ $user->dob }}</strong></h5>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="author">
                            <div class="row">
                                <div class="col-lg-8 col-md-6 col-6 mx-auto">
                                    <h6 class="title text-primary">Email</h6>
                                    <h5 class="description"><strong>{{$user->email}}</strong></h5>
                                </div>

                                <div class="col-lg-4 col-md-6 col-6 mx-auto">
                                    <h6 class="title text-primary">Phone Number</h6>
                                    <h5 class="description"><strong>{{ $user->phone_number}}</strong></h5>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="author">
                            <div class="row">
                                <div class="col-lg-8 col-md-6 col-6 mx-auto">
                                    <h6 class="title text-primary">Contact in case of emergency</h6>
                                    <h5 class="description"><strong>{{ $user->contact }}</strong></h5>
                                </div>

                                <div class="col-lg-4 col-md-6 col-6 mx-auto">
                                    <h6 class="title text-primary">Contact Number</h6>
                                    <h5 class="description"><strong>{{ $user->contact_number }}</strong></h5>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="card-footer p-4">
                        <div class="button-container">
                            <div class="d-flex justify-content-end">
                                <span class="text-success"><strong>Approved</strong></span>
                                @if (Auth::user()->status === 'pending')
                                <div class="text-center">
                                    <a href="{{route('student.profile.edit', ['profile' => $user->id])}}" type="submit" class="btn btn-info">{{ __('Edit') }}</a>
                                </div>
                                @elseif (Auth::user()->status === 'declined')
                                <div class="text-center">
                                    <a href="{{route('student.profile.edit', ['profile' => $user->id])}}" type="submit" class="btn btn-info">{{ __('Edit') }}</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                                    <strong>{{$program}}</strong>
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
                                    <a href="" type="submit" class="btn btn-default w-100">{{ __('Print ID') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
