@extends('layouts.app')
@section('title')
Department
@endsection
@section('content')
<div class="col-md-12">
    <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Filter <i class="fa fa-filter"></i>
        </a>


        <div class="collapse" id="collapseExample">
            <div class="panel">
                <div class="panel-body">
                    <form method="get">
                        <div class="row">

                            <div class="col-md-4 form-group">
                                <label for="firstName">Patient Name</label>
                                <input type="text" placeholder="Patient Name" class="form-control" name="patient_name">
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="middleName">Patient Id</label>
                                <input type="text" placeholder="Patient Id" class="form-control" name="patient_id">
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="lastName">Email</label>
                                <input type="text" placeholder="Patient Email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-4 form-group">
                                <label for="consultantName">Consultant Name</label>
                                <input type="text" placeholder="Consultant Name" class="form-control" name="consultant_name">
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="fromDate">From Date</label>
                                <input type="text" placeholder="From Date" class="form-control" name="from_date">
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="lastName">To Date</label>
                                <input type="text" placeholder="To Date" class="form-control" name="to_date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="phone">Phone</label>
                                <input type="text" placeholder="patient phone No" class="form-control" name="phone_no">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">
                            <i class="fa fa-search">
                                Search
                            </i>
                        </button>
                        <a href="{{request()->url()}}" class="btn btn-danger mr-2">
                            <i class="fa fa-refresh" aria-hidden="true"> Reset</i>
                        </a>

                    </form>
                </div>
            </div>
        </div>
</div>
<div class="col-md-12">
    <div class="panel">
        <header class="panel-heading">
            Patient List
        </header>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Registation No</th>
                        <th>Name</th>
                        <th>Consultant Name</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($patients as $key=>$patient)
                    <tr>
                        <td> {{ $key+ 1 + ($patients->perPage() * ($patients->currentPage() - 1)) }}</td>
                        <td>{{ $patient->patients_no ??''}}</td>
                        <td>{{ $patient->fullname??'' }}</td>
                        <td>{{ $patient->appointment->doctor->fullname ??''}}</td>
                        <td>{{ $patient->mobile_no??'' }}</td>
                        <td>{{ $patient->email ??''}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('appointment.create', $patient) }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Make Appointment</a>
                                <a href="{{ route('patient.edit',$patient) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit Patient</a><br>
                                &nbsp;&nbsp;<a href="{{ route('patient.show',$patient) }}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i>&nbsp;Management</a>
                              
                            </div>
                        </td>

                    </tr>
                    @empty
                    @endforelse

                </tbody>

            </table>

        </div>
    </div>
</div>

@endsection
@section('css')
@endsection
@section('js')
@endsection