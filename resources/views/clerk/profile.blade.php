@extends('layouts.app', ['title' => 'Clerk Profile'])

@section('content')

<div class="col-md-6 mx-auto">
    <div class="card card-user">
        <div class="image">
        </div>
        <div class="card-body">
            <div class="author">
                <a href="#">
                    <img class="avatar border-gray" src="/src/user.png" alt="...">

                    <h5 class="title">{{$user->name}}</h5>
                </a>
                <p class="description">
                    {{$user->username}}
                </p>
            </div>

            <hr>
            <div class="button-container">
                <div class="row">
                    <!--Email-->
                    <div class="col-lg-6 col-md-6 col-6 mx-auto">
                        <h5>{{ __($user->email) }}
                            <br>
                            <small>{{ __('Email') }}</small>
                        </h5>
                    </div>
                    <!--Username-->
                    <div class="col-lg-6 col-md-6 col-6 mx-auto">
                        <h5>{{ __($user->phone_number) }}
                            <br>
                            <small>{{ __('Phone Number') }}</small>
                        </h5>
                    </div>
                    {{-- <div class="col-lg-3 mx-auto">
                        <h5>{{ __('24,6$') }}
                            <br>
                            <small>{{ __('Spent') }}</small>
                        </h5>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
