@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="panel">
        <header class="panel-heading">
            Fee List
            <a class="btn btn-sm btn-primary m-b-10  pull-right" href="{{route('fee.create')}}">
                <i class="fa fa-plus"></i> Add Fee
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
                    @forelse($fees as $key => $fee)
                    <tr>
                        <td> {{ $key+ 1 + ($fees->perPage() * ($fees->currentPage() - 1)) }}</td>
                        <td>{{$fee->feeHead->name}}</td>
                        <td>{{ $fee->amount }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('fee.edit',$fee)}}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="{{route('fee.delete',$fee)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash "></i> Delete</a>
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
            {{$fees->appends(request()->all())->links()}}
        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
</div>
@endsection
@section('css')

@endsection
@section('js')

@endsection