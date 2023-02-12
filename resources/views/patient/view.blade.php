@extends('layouts.app')
@section('title')
Department
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <header class="panel-heading">
                    Patient Details
                </header>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Patient Name</th>
                            <th>{{ $patient->full_name }}</th>
                        </tr>
                        <tr>
                            <th>Mobile No</th>
                            <th>{{ $patient->mobile_no }}</th>

                        </tr>
                        <tr>
                            <th>Email</th>
                            <th>{{ $patient->email }}</th>

                        </tr>
                        <tr>
                            <th>Age</th>
                            <th>{{ $patient->age }}</th>

                        </tr>
                        <tr>
                            <th>Address</th>
                            <th>{{ $patient->address }},{{ $patient->street_name }},{{ $patient->pin }}</th>

                        </tr>
                        </tr>
                        <tr>
                    </table>

                </div><!-- /.panel-body -->

            </div><!-- /.panel -->


        </div><!-- /.col -->

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <header class="panel-heading">
                            Consultant Details

                        </header>
                        <div class="panel-body">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Appointment Number</th>
                                        <th>Consultant Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($appointments as $key=>$appointment)


                                    <tr>
                                        <th>{{$key+1}}</th>
                                        <th>{{ $appointment->created_at??'' }}</th>
                                        <th>{{ $appointment->appointment_number }}</th>

                                        <th>Dr.{{$appointment->doctor->first_name??'' }} {{ $appointment->doctor->middle_name??'' }} {{ $appointment->doctor->last_name??'' }}</th>
                                        <th>{{$appointment->doctor->mobile_no ??''}}</th>
                                        <th>{{$appointment->doctor->email??''}}</th>

                                        <td align="left">
                                            <a href="{{route('appointment.delete',$appointment)}}" class="btn btn-sm btn-danger">Delete</a>
                                            <a href="{{route('appointment.showpdf',[$patient,$appointment])}}" class="btn btn-sm btn-warning"><i class="fa fa-print"></i>Print</a>
                                        </td>
                                    </tr>


                                    @empty
                                    <tr>
                                        <th colspan="3">No Data</th>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>



                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</section>

@endsection
@section('css')
@endsection
@section('js')
@endsection