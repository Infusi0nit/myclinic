@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="panel">
        <header class="panel-heading">
            Medical Test List
            <a class="btn btn-sm btn-primary m-b-10  pull-right" href="{{ route('medical-test.create') }}">
                <i class="fa fa-plus"></i> Add Medical Test
            </a>
        </header>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Ammount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($medical_tests as $key => $medical_test)
                    <tr>
                        <td> {{ $key+ 1 + ($medical_tests->perPage() * ($medical_tests->currentPage() - 1)) }}</td>
                        <td>{{$medical_test->name}}</td>
                        <td>{{ $medical_test->amount }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('medical-test.edit',$medical_test)}}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="{{route('medical-test.delete',$medical_test)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash "></i> Delete</a>
                            </div>

                        </td>

                    </tr>
                    @empty
                    <tr>
                        <th colspan="3">No Data</th>
                    </tr>
                    @endforelse
                </tbody>

            </table>
            {{$medical_tests->appends(request()->all())->links()}}
        </div>
       
       
    </div><!-- /.panel -->
</div>
@endsection
@section('css')

@endsection
@section('js')

@endsection