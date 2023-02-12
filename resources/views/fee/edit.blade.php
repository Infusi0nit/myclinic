@extends('layouts.app')
@section('title')
Fee
@endsection
@section('content')
<!-- Input -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Fee
                    <a class="btn btn-sm btn-primary m-b-10  pull-right" href="{{route('fee.index')}}">
                        <i class="fa fa-list"></i> All Fee Head
                    </a>
                </header>
                <div class="panel-body">
                    <form method="put" action="{{route('fee.update',$fee)}}" method="post">
                        @method("PUT")
                        @include('fee.form')
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