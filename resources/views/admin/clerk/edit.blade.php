@extends('layouts.app', ['title' => 'Edit Clerk Information'])

@section('content')

            <div class="col-md-8 text-center mx-auto">
                <form class="col-md-12" action="{{route('admin.clerk.update', ['clerk' => $user->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title">{{ __('Edit Clerk Information') }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Name') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{$user->name}}" required>
                                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                        <br>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Email') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{$user->email}}" required>
                                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Phone Number') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number" value="{{$user->phone_number}}" required>
                                        <span class="text-danger">@error('phone_number') {{$message}} @enderror</span>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Username') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="{{$user->username}}" required>
                                        <span class="text-danger">@error('username') {{$message}} @enderror</span>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        <div class="card-footer mt-4">
                            <div class="row">
                                <div class="col-6 text-center">
                                    <button type="submit" class="btn btn-info">{{ __('Save Changes') }}</button>
                                </div>
                                <div class="col-6 text-center">
                                    <a href="{{route('admin.clerk.index')}}" type="button" class="btn btn-warning">{{ __('Cancel') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection
