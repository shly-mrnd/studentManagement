@extends('layouts.app', ['title' => 'Student List'])

@section('content')

    <div class="content">
        <div class="row">
            <!--Student Record-->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Student List</h4>
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
                                        Email
                                    </th>
                                    <th>
                                        Year Level
                                    </th>
                                    <th>
                                        Program
                                    </th>
                                    <th>
                                        Address
                                    </th>
                                    <th>
                                        Phone Number
                                    </th>
                                    <th>
                                        View Student Details
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Jezel Manlangit
                                        </td>
                                        <td>
                                            jezel@gmail.com
                                        </td>
                                        <td>
                                           4
                                        </td>
                                        <td>
                                            BSINFOTECH
                                        </td>
                                        <td>
                                            Palnab del Norte
                                        </td>
                                        <td>
                                            091234847
                                        </td>
                                        <td>
                                            <a href="{{route('clerk.students.show', 2)}}" class="btn btn-sm btn-success">View Details</a>
                                        </td>
                                        <td>
                                            <span class="text-warning">Pending</span>
                                            {{-- <span class="text-danger">Decline</span>
                                            <span class="text-success">Approved</span> --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Kim Vibal
                                        </td>
                                        <td>
                                            kim@gmail.com
                                        </td>
                                        <td>
                                           4
                                        </td>
                                        <td>
                                            BSINFOTECH
                                        </td>
                                        <td>
                                            Palnab del Norte
                                        </td>
                                        <td>
                                            091234847
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success">View Details</a>
                                        </td>
                                        <td>
                                            {{-- <span class="text-warning">Pending</span>
                                            <span class="text-danger">Decline</span> --}}
                                            <span class="text-success">Approved</span>
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
