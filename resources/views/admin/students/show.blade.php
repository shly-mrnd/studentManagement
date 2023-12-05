@extends('layouts.app', ['title' => 'Student Profile'])

@section('content')

<div class="col-md-8 text-center mx-auto">
        <div class="card">
            <div class="card-header">

                <h3 class="title">{{ __('Student Profile') }}</h3>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-md btn-primary">{{ __('Accept') }}</button>
                    <button type="submit" class="btn btn-md btn-danger">{{ __('Decline') }}</button>
                    {{-- <div class="text-center">
                        <button type="submit" class="btn btn-md btn-primary">{{ __('Accept') }}</button>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-md btn-danger">{{ __('Decline') }}</button>
                    </div> --}}
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <label class="col-md-3 col-form-label">{{ __('Student ID') }}</label>
                    <div class="col-md-9">
                        <p class="col-md-3 description form-control">2020-15487</p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label">{{ __('Name') }}</label>
                    <div class="col-md-9">
                        <p class="col-md-3 description form-control">Jezel Manlangit</p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label">{{ __('Email') }}</label>
                    <div class="col-md-9">
                            <p class="col-md-3 description form-control">jezel@gmail.com</p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label">{{ __('Year Level') }}</label>
                    <div class="col-md-9">
                        <p class="col-md-3 description form-control">4</p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label">{{ __('Program') }}</label>
                    <div class="col-md-9">
                        <p class="col-md-3 description form-control">BSInfoTech</p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label">{{ __('Date of Birth') }}</label>
                    <div class="col-md-9">
                        <p class="col-md-3 description form-control">August 24, 2002</p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label">{{ __('Contact in case of emergency') }}</label>
                    <div class="col-md-9">
                        <p class="col-md-3 description form-control">Tiyo Hector</p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label">{{ __('Phone Number') }}</label>
                    <div class="col-md-9">
                        <p class="col-md-3 description form-control">0912364789</p>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="{{route('admin.students.edit', 2)}}" type="submit" class="btn btn-lg btn-info">{{ __('Edit') }}</a>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
