@extends('layouts.app', ['title' => 'Add Clerk Account'])

@section('content')

    <div class="col-md-8 text-center mx-auto">
        <form class="col-md-12" action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Add Clerk Account') }}</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Name') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name (Last Name, Given Name, Middle Name(optional))" value="" required>
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
                        <label class="col-md-3 col-form-label">{{ __('Position') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Position" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Username') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Username" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Password') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="password" name="email" class="form-control" placeholder="Password" value="" required>
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
