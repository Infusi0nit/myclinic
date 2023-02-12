@extends('layouts.app')
@section('title')
Fee Head
@endsection
@section('content')
<!-- Input -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Medical Test
                    <a class="btn btn-sm btn-primary m-b-10  pull-right" href="{{route('medical-test.index')}}">
                        <i class="fa fa-list"></i> All Fee Head
                    </a>
                </header>
                <div class="panel-body">
                    <form method="put" action="{{route('medical-test.update',$medical_test)}}" method="post">
                        @method("PUT")
                        @include('medical-test.form')
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