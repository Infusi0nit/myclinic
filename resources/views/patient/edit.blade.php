@extends('layouts.app')
@section('title')
Department
@endsection
@section('content')
<!-- Input -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Patient
                    <a class="btn btn-sm btn-primary m-b-10  pull-right" href="{{route('patient.index')}}">
                <i class="fa fa-list"></i> All Patient
            </a>
                </header>
                <div class="panel-body">
                    <form  enctype="multipart/form-data" method="post" action="{{route('patient.update',$patient)}}" id="patient">
                  
                       @include('patient.form')
                        <button type="submit" class="btn btn-info">Update Patient Details</button>
                    </form>

                </div>
            </section>
        </div>
    </div>
    </div>
    <!-- #END# Input -->
    @endsection
    @section('css')
    @endsection
    @section('js')
    
    @endsection