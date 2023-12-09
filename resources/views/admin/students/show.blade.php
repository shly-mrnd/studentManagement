@extends('layouts.app', ['title' => 'Student Profile'])

@section('content')

    <div class="col-md-8 text-center mx-auto">
            <div class="card">
                <div class="card-header">

                    <h3 class="title">{{ __('Student Profile') }}</h3>

                    <div class="d-flex justify-content-end">
                        @if ($user->status === 'pending')
                            <form action="{{route('admin.students.update', ['student' => $user->id])}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="action" value="approve">
                                <button type="submit" class="btn btn-md btn-primary">{{ __('Approve') }}</button>
                                <button type="submit" class="btn btn-md btn-danger">{{ __('Decline') }}</button>
                            </form>
                        @elseif ($user->status === 'declined')
                            <form action="{{route('admin.students.update', ['student' => $user->id])}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="action" value="approve">
                                <button type="submit" class="btn btn-md btn-success">{{ __('Re-Approve') }}</button>
                                {{-- <button type="submit" class="btn btn-md btn-danger">{{ __('Decline') }}</button> --}}
                            </form>
                        @elseif ($user->status === 'approved')
                            <form action="{{route('admin.students.update', ['student' => $user->id])}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="action" value="decline">
                                <button type="submit" class="btn btn-md btn-danger">{{ __('Decline') }}</button>
                            </form>
                        @endif
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Student ID') }}</label>
                        <div class="col-md-9">
                            <p class="col-md-3 description form-control">{{$user->student_id}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Name') }}</label>
                        <div class="col-md-9">
                            <p class="col-md-3 description form-control">{{$user->name}}</p>
                        </div>
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
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Program') }}</label>
                        <div class="col-md-9">
                            <p class="col-md-3 description form-control">{{$program}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Email') }}</label>
                        <div class="col-md-9">
                                <p class="col-md-3 description form-control">{{$user->email}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Phone Number') }}</label>
                        <div class="col-md-9">
                            <p class="col-md-3 description form-control">{{$user->phone_number}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Address') }}</label>
                        <div class="col-md-9">
                            <p class="col-md-3 description form-control">{{$user->address}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Date of Birth') }}</label>
                        <div class="col-md-9">
                            <p class="col-md-3 description form-control">{{$user->dob}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Contact in case of emergency') }}</label>
                        <div class="col-md-9">
                            <p class="col-md-3 description form-control">{{$user->contact}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Contact Number') }}</label>
                        <div class="col-md-9">
                            <p class="col-md-3 description form-control">{{$user->contact_number}}</p>
                        </div>
                    </div>

                </div>
                <div class="card-footer ">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{route('admin.students.index')}}" type="submit" class="btn btn-lg btn-info">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection
