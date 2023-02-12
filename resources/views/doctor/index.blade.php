@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="panel">
        <header class="panel-heading">
            Doctor List
            <a class="btn btn-sm btn-primary m-b-10  pull-right" href="{{route('doctor.create')}}">
                <i class="fa fa-plus"></i> Add Doctor
            </a>
        </header>

        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Gender</th>
                        <th>Educational Qualification</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($doctors as $key => $doctor)
                    <tr>
                        <td> {{ $key+ 1 + ($doctors->perPage() * ($doctors->currentPage() - 1)) }}</td>
                        <td> @if(!empty($doctor->image_name))
                            <b><img src="{{asset('./uploads/doctorimage/'.$doctor->image_name)}}"style="height: 70px;width: 70px;"></b>
                            @endif</td>
                        <td>{{ $doctor->fullname }}</td>
                        <td>{{ $doctor->mobile_no }}</td>
                        <th>{{ $doctor->email }}</th>
                        <td>{{ $doctor->department->name }}</td>
                        @if ($doctor->gender==0)
                        <td>Male</td>
                        @elseif($doctor->gender==1)
                        <td>Female</td>
                        @else
                        <td>Other</td>
                        @endif
                        <td>{{ $doctor->educational_qualification }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('doctor.edit',$doctor)}}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="{{route('doctor.delete',$doctor)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash "></i> Delete</a>
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
            {{$doctors->appends(request()->all())->links()}}
        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
</div>
@endsection
@section('css')

@endsection
@section('js')

@endsection