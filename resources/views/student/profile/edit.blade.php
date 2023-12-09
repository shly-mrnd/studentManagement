@extends('layouts.app', ['title' => 'Edit Profile'])

@section('content')

            <div class="col-md-8 text-center mx-auto">
                <form class="col-md-12" action="{{route('student.profile.update', ['profile' => $user->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title">{{ __('Edit Profile') }}</h3>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Student ID') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="student_id" id="student_id" class="form-control" placeholder="Student ID" value="{{$user->student_id}}" required>
                                        <span class="text-danger">@error('student_id') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Name') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{$user->name}}" required>
                                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Program') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <select class="form-select @error('program') is-invalid @enderror" name="program" aria-label="Large select example" value="{{$user->program}}">
                                            <option {{$user->program == "BSIT" ? 'selected' : ''}} value="BSIT">BS in Information Technology</option>
                                            <option {{$user->program == "BSCS" ? 'selected' : ''}} value="BSCS">BS in Computer Science</option>
                                            <option {{$user->program == "BSIS" ? 'selected' : ''}} value="BSIS">BS in Information System</option>
                                          </select>
                                          <span class="text-danger">@error('program') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Email') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{$user->email}}" required>
                                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Phone Number') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number" value="{{$user->phone_number}}" required>
                                        <span class="text-danger">@error('phone_number') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Address') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="address" id="address" class="form-control" placeholder="Address" value="{{$user->address}}" required>
                                        <span class="text-danger">@error('address') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Date of Birth') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="date" name="dob" id="dob" class="form-control" placeholder="Date of Birth" value="{{$user->dob}}" required>
                                        <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Contact in case of emergency') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="contact" id="contact" class="form-control" placeholder="Name of Contact" value="{{$user->contact}}" required>
                                        <span class="text-danger">@error('contact') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Contact Number') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="contact_number" id="contact_number" class="form-control" placeholder="Contact Number" value="{{$user->contact_number}}" required>
                                        <span class="text-danger">@error('contact_number') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-6 text-center">
                                    <button type="submit" class="btn btn-info">{{ __('Save Changes') }}</button>
                                </div>
                                <div class="col-6 text-center">
                                    <a href="{{route('admin.profile.index')}}" type="submit" class="btn btn-warning">{{ __('Cancel') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection
