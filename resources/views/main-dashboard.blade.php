@extends('layouts.app', ['title' => 'CICT'])

@section('content')

    <div class="content mx-auto">
        <div class="typography-line">
            <blockquote class="blockquote blockquote-primary">
                    @role('administrator')
                        <h2 class="fs-4">Welcome to CICT Student Management System, <strong class="text-primary">{{ Auth::user()->name }}</strong></h2>
                    @endrole

                    @role('student')
                        <h2 class="fs-4">Welcome to CICT Student Management System, <strong class="text-primary">{{ Auth::user()->name }}</strong></h2>
                        @if (Auth::user()->status === 'pending')
                            <h3 class="fs-5 text-danger">Your status is currently pending. Please go to profile to edit your information.</h3>
                            <h3 class="fs-5">Thank You.</h3>
                        @elseif (Auth::user()->status === 'declined')
                            <h3 class="fs-5">Your registration for profiling has been declined, please go to the faculty office for
                                information as to why your registration has been declined.</h3>
                            <h3 class="fs-5">Thank You.</h3>
                        @endif
                    @endrole

                    @role('clerk')
                        <h2 class="fs-4">Welcome to CICT Student Management System, <strong class="text-primary">{{ Auth::user()->name }}</strong></h2>
                    @endrole
            </blockquote>
        </div>
    </div>

@endsection
