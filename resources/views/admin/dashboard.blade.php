@extends('layouts.app', ['title' => 'Admin Dashboard'])

@section('content')

    <div class="content">
        <div class="row">
            <!--Student Record-->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Student Record Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-center">
                                    <th>
                                        ID Number
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                       Program
                                    </th>
                                </thead>
                                <tbody>
                                @foreach ($students as $student)
                                    <tr class="text-center">
                                        <td class="fs-5">
                                            {{$student->student_id}}
                                        </td>
                                        <td class="fs-5">
                                            {{$student->name}}
                                        </td>
                                        @php
                                        $program = '';
                                        if ($student->program === 'BSIT') {
                                            $program = 'BS in Information Technology';
                                        } elseif ($student->program === 'BSIS') {
                                            $program = 'BS in Information System';
                                        } elseif ($student->program === 'BSCS') {
                                            $program = 'BS in Computer Science';
                                        }
                                        @endphp
                                        <td class="fs-5">
                                            {{$program}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--Clerk Record-->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Clerk Record Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-center">
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Username
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                       Phone Number
                                    </th>
                                </thead>
                                <tbody>
                                @foreach ($clerks as $clerk)
                                    <tr class="text-center">
                                        <td class="fs-5">
                                            {{$clerk->name}}
                                        </td>
                                        <td class="fs-5">
                                           {{$clerk->username}}
                                        </td>
                                        <td>
                                            {{$clerk->email}}
                                        </td>
                                        <td class="fs-5">
                                            {{$clerk->phone_number}}
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
