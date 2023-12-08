@extends('layouts.app', ['title' => 'Edit Profile'])

@section('content')

            <div class="col-md-8 text-center mx-auto">
                <form class="col-md-12" action="" method="POST" enctype="multipart/form-data">
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
                                        <input type="text" name="studentId" class="form-control" placeholder="Student ID" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Name') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Program') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="prog" class="form-control" placeholder="Program" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Email') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Phone Number') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="phoneNum" class="form-control" placeholder="Phone Number" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Address') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control" placeholder="Address" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Date of Birth') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="dob" class="form-control" placeholder="Date of Birth" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Contact in case of emergency') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="contac" class="form-control" placeholder="Name of Contact" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Contact Number') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="contactNum" class="form-control" placeholder="Contact Number" value="" required>
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
                                    <a href="{{route('student.profile.show', 2)}}" type="submit" class="btn btn-warning">{{ __('Cancel') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection
