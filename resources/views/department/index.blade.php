@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="panel">
        <header class="panel-heading">
            Department List
            <a class="btn btn-sm btn-primary m-b-10  pull-right" href="{{route('department.create')}}">
                <i class="fa fa-plus"></i> Add Department
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
                    @forelse($departments as $key => $department)
                    <tr>
                        <td> {{ $key+ 1 + ($departments->perPage() * ($departments->currentPage() - 1)) }}</td>
                        <td>{{$department->name}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('department.edit',$department)}}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="{{route('department.delete',$department)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash "></i> Delete</a>
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
            {{$departments->appends(request()->all())->links()}}
        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
</div>
@endsection
@section('css')

@endsection
@section('js')

@endsection