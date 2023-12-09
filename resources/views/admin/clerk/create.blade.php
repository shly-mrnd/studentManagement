@extends('layouts.app', ['title' => 'Add Clerk Account'])

@section('content')

    <div class="col-md-8 text-center mx-auto">
        <form class="col-md-12" action="{{route('admin.clerk.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- @method('PUT') --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Add Clerk Account') }}</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Name') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name (Last Name, Given Name, Middle Name(optional))" value="{{old('name')}}" required>
                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Email') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{old('email')}}" required>
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Phone Number') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number" value="{{old('phone_number')}}" required>
                                <span class="text-danger">@error('phone_number') {{$message}} @enderror</span>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Username') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{old('username')}}" required>
                                <span class="text-danger">@error('username') {{$message}} @enderror</span>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Password') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" value="{{old('password')}}" required>
                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Confirm Password') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password" value="{{old('password')}}" required>
                                <span class="text-danger">@error('password_confirmation') {{$message}} @enderror</span>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <div class="d-flex justify-content-center">
                        <div class="col-6 text-center">
                            <button type="submit" class="btn btn-primary">{{ __('Add') }}</button>
                        </div>
                        <div class="col-6 text-center">
                            <a href="{{route('admin.clerk.index')}}" type="submit" class="btn btn-danger">{{ __('Cancel') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
