@extends('layouts.app')
@section('title')
Appointment
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            <section class="panel">
                <header class="panel-heading">
                    Already Registered Patient
                </header>
                <div class="panel-body">
                    <form role="form" method="post" action="{{route('patient.find')}}">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="name">Patient Id</label>
                                <input type="text" class="form-control" id="patient_id" name="pateient_id" placeholder="Enter Patient Id" >
                            </div>
                            <div class="form-group">
                                <label for="name"> Patient Name</label>
                                <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="Enter Patient Name" >
                            </div>
                            <div class="form-group">
                                <label for="name"> Patient Phone No.</label>
                                <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter Patient Phone No" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">find Patient</button>

                    </form>

                </div>
            </section>
        </div>
    </div>
</section>
@endsection
@section('css')
@endsection
@section('js')
@endsection