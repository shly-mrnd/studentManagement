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
                                        Student ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Program
                                    </th>
                                    <th>
                                        View Student Details
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ( $users as $user )
                                    <tr>
                                        <td>
                                            {{$user->student_id}}
                                        </td>
                                        <td>
                                            {{$user->name}}
                                        </td>
                                        <td>
                                            {{$user->email}}
                                        </td>
                                        @php
                                        $program = '';
                                        if ($user->program === 'BSIT') {
                                            $program = 'BS in Information Technology';
                                        } elseif ($user->program === 'BSIS') {
                                            $program = 'BS in Information System';
                                        } elseif ($user->program === 'BSCS') {
                                            $program = 'BS in Computer Science';
                                        }
                                         @endphp
                                        <td>
                                            {{$program}}
                                        </td>
                                        <td>
                                            <a href="{{route('clerk.students.show', ['student' => $user->id ])}}" class="btn btn-sm btn-success">View Details</a>
                                        </td>
                                        <td>
                                            @if($user->status === 'pending')
                                            <span class="text-warning"><strong>Pending</strong></span>
                                            @elseif ($user->status === 'declined')
                                            <span class="text-danger"><strong>Declined</strong></span>
                                            @elseif ($user->status === 'approved')
                                            <span class="text-success"><strong>Approved</strong></span>
                                            @endif
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
