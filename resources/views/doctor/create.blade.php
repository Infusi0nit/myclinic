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
                    Doctor
                    <a class="btn btn-sm btn-primary m-b-10  pull-right" href="{{route('doctor.index')}}">
                <i class="fa fa-list"></i> All Doctor
            </a>
                </header>
                <div class="panel-body">
                    <form  enctype="multipart/form-data" method="post" action="{{route('doctor.store')}}">
                       @include('doctor.form')
                        <button type="submit" class="btn btn-info">Submit</button>
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