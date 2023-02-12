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
                    My Clinic(Appointment)
                </header>
                <div class="panel-body">
                    <form role="form">
                        <div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="{{asset('./uploads/logo/logo.jpeg')}}">
                        </div>
                        <a href="{{route('patient.create')}}" class="btn btn-info btn-block">New Patient</a>
                        <a href="{{ route('patient.registeredfind') }}" class="btn btn-info btn-block">Already Registered Patient</a>
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