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
                                        No
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Position
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Username
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Molde, Isa
                                        </td>
                                        <td>
                                            Clerk 1
                                        </td>
                                        <td>
                                            isamolde@gmail.com
                                        </td>
                                        <td>
                                            Dean-Clerk
                                        </td>
                                        <td>
                                            <a href="{{route('admin.clerk.show', 4)}}" class="btn btn-sm btn-success">View Details</a>
                                            <a href="{{route('admin.clerk.edit', 4)}}" class="btn btn-sm btn-info">Edit Account</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Isa Molde
                                        </td>
                                        <td>
                                            Clerk 1
                                        </td>
                                        <td>
                                            isamolde@gmail.com
                                        </td>
                                        <td>
                                            Dean-Clerk
                                        </td>
                                        <td>
                                            <a href="{{route('admin.clerk.show', 4)}}" class="btn btn-sm btn-success">View Details</a>
                                            <a href="{{route('admin.clerk.edit', 4)}}" class="btn btn-sm btn-info">Edit Account</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
