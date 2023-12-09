@extends('layouts.app', ['title' => 'Edit Admin Profile'])

@section('content')

            <div class="col-md-8 text-center mx-auto">
                <form class="col-md-12" action="{{route('admin.profile.update', ['profile' => $user->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title">{{ __('Edit Admin Information') }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Name') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{$user->name}}">
                                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label" for="program">{{ __('Department') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="program" id="program" class="form-control" placeholder="College Department" value="{{$user->program}}">
                                        <span class="text-danger">@error('program') {{$message}} @enderror</span>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Email') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{$user->email}}">
                                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Address') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" id="address" name="address" class="form-control" placeholder="Address" value="{{$user->address}}">
                                        <span class="text-danger">@error('address') {{$message}} @enderror</span>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Phone Number') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Phone Number" value="{{$user->phone_number}}">
                                        <span class="text-danger">@error('phone_number') {{$message}} @enderror</span>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Username') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="{{$user->username}}">
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
                                    <a href="{{route('admin.profile.index')}}" type="button" class="btn btn-warning">{{ __('Cancel') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection
