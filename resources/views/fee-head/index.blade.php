@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="panel">
        <header class="panel-heading">
            Fee Head List
            <a class="btn btn-sm btn-primary m-b-10  pull-right" href="{{route('fee-head.create')}}">
                <i class="fa fa-plus"></i> Add Fee Head
            </a>
        </header>
      
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($fee_heads as $key => $fee_head)
                    <tr>
                        <td> {{ $key+ 1 + ($fee_heads->perPage() * ($fee_heads->currentPage() - 1)) }}</td>
                        <td>{{$fee_head->name}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('fee-head.edit',$fee_head)}}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="{{route('fee-head.delete',$fee_head)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash "></i> Delete</a>
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
            {{$fee_heads->appends(request()->all())->links()}}
        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
</div>
@endsection
@section('css')

@endsection
@section('js')

@endsection