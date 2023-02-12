@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="panel">
        <header class="panel-heading">
            Doctor List
            <a class="btn btn-sm btn-primary m-b-10  pull-right" href="{{route('investigationPatient.create')}}">
                <i class="fa fa-plus"></i> Register for Investigation Test
            </a>
        </header>

        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Patient Name</th>
                        <th>Investigation List</th>
                        <th> Amount</th>
                        <th>Total Amount</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                @forelse($investigations as $key=>$investigation)
                    <tr>
                        <td> {{ $key+ 1 + ($investigations->perPage() * ($investigations->currentPage() - 1)) }}</td>
                        <td>{{ $investigation->patient->full_name }}</td>
                        
                        <td>
                        @foreach($investigation->investigation_details as $investigation_detail )
                    
                        {{ $investigation_detail->medical_test->name }}<br>

                            @endforeach
                        </td>
                        <td>
                        @foreach($investigation->investigation_details as $investigation_detail )
                    
                        {{ $investigation_detail->medical_test->amount }}<br>

                            @endforeach
                        </td>
                        <td>{{ $investigation->total_amount}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('investigationPatient.edit',$investigation)}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i>Edit</a>
                                <a href="{{route('investigationPatient.pdf',$investigation)}}" class="btn btn-sm btn-info"><i class="fa fa-print"></i>Print</a>
                                <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash "></i> Delete</a>
                            </div>
                        </td>


                    </tr>
                    @empty
                    @endforelse
                </tbody>

            </table>
           
        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
</div>
@endsection
@section('css')

@endsection
@section('js')

@endsection