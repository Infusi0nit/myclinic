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
                    Department
                    <a class="btn btn-sm btn-primary m-b-10  pull-right" href="{{route('department.index')}}">
                        <i class="fa fa-list"></i> All Department
                    </a>
                </header>
                <div class="panel-body">
                    <form  action="{{route('department.update',$department)}}" method="post">
                    
                        @include('department.form')
                        <button type="submit" class="btn btn-info">Update</button>
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