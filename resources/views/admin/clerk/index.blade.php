@extends('layouts.app', ['title' => 'Clerk List'])

@section('content')

    <div class="content">
        <div class="row">
            <!--Clerk Record-->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Clerk Records</strong></h4>

                        <div class="d-flex justify-content-end">
                            <a href="{{route('admin.clerk.create')}}" type="submit" class="btn btn-md btn-primary">{{ __('Add Account') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-bordered">
                            <table class="table">
                                <thead class="text-center">
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Phone Number
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ( $users as $user )
                                        <tr>
                                            <td>
                                                {{$user->name}}
                                            </td>
                                            <td>
                                                {{$user->email}}
                                            </td>
                                            <td>
                                                {{$user->phone_number}}
                                            </td>
                                            <td>
                                                <a href="{{route('admin.clerk.show', ['clerk' => $user->id])}}" class="btn btn-sm btn-success">View Details</a>
                                                <a href="{{route('admin.clerk.edit', ['clerk' => $user->id])}}" class="btn btn-sm btn-info">Edit Account</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
