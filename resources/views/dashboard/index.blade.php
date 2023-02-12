@extends('layouts.app')
@section('content')
<div class="row" style="margin-bottom:5px;">
                    <div class="col-md-3">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-red"><i class="fa fa-user"></i></span>
                            <div class="sm-st-info">
                                <span>{{$daily_patient}}</span>
                                Total Patient Daily Basis
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-violet"><i class="fa fa-envelope-o"></i></span>
                            <div class="sm-st-info">
                                <span>{{$daily_appointment}}</span>
                                Total Appointment Daily Basis
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-blue"><i class="fa fa-dollar"></i></span>
                            <div class="sm-st-info">
                                <span>{{$total_patient}}</span>
                                Total Patient
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-green"><i class="fa fa-paperclip"></i></span>
                            <div class="sm-st-info">
                                <span>{{$total_appointment}}</span>
                                Total Appointment
                            </div>
                        </div>
                    </div>
                </div>
               
                @endsection
@section('css')

@endsection
@section('js')

@endsection