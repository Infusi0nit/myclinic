@extends('layouts.app')
@section('title')
Department
@endsection
@section('content')
<!-- Input -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Patient Details
                        </header>
                        <div class="panel-body">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Name:</td>
                                        <td>{{ $patient_details->first_name }} {{ $patient_details->middle_name }} {{ $patient_details->last_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile:</td>
                                        <td>{{ $patient_details->mobile_no }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td>{{ $patient_details->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Age:</td>
                                        <td>{{ $patient_details->age }}</td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td>{{ $patient_details->address }},{{ $patient_details->street_name }},{{ $patient_details->locality }} ,{{ $patient_details->pin }}</td>

                                    </tr>
                                    <tr>
                                        <td>Patient Serial No:</td>
                                        <td>{{ $patient_details->patients_no}}</td>

                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </section>
                </div>
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Appointment
                        </header>
                        <div class="panel-body">
                            <form enctype="multipart/form-data" method="post" action="{{route('appointment.update',$appointment)}}" class="form-horizontal">
                                @include('appointment.form')
                                <button type="submit" class="btn btn-info">Update</button>
                            </form>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- #END# Input -->
@endsection
@section('css')
@endsection
@section('js')
<script>
 $(document).on("change", ".fee_head", function() {
            var id=$(this).val();
            $.ajax({
               type:'GET',
               url:'{{URL::route('getfeeamount')}}',
              data:{'fee_head_id':id,'_token': $('input[name=_token]').val()},
              dataType:'text',
              success:function(data){
                  console.log(data);
                  
                   $(".amount").val(data);
            
              },error:function(){
                  console.log("error");
              }
            });
        });
</script>
<script>
 $(document).on("change", ".fee_head", function() {
            var id=$(this).val();
            $.ajax({
               type:'GET',
               url:'{{URL::route('getfeeamount')}}',
              data:{'fee_head_id':id,'_token': $('input[name=_token]').val()},
              dataType:'text',
              success:function(data){
                  console.log(data);
                  
                   $(".amount").val(data);
            
              },error:function(){
                  console.log("error");
              }
            });
        });
</script>
<script type="text/javascript">
        $('#department_id').change(function(){
        var id = $(this).val();   
        console.log(id);
        if(id){
            $.ajax({
               type:"GET",
               url:'{{URL::route('getdoctorbydeparment')}}',
               data:{'department_id':id,'_token': $('input[name=_token]').val()},
               success:function(res){               
                if(res){
                    $("#doctor_id").empty();
                    $("#doctor_id").append('<option>Select</option>');
                    $.each(res,function(key,value){
                        console.log(key);
                        $("#doctor_id").append('<option value="'+key+'">'+value+'</option>');
                    });
               
                }else{
                   $("#state").empty();
                }
               }
            });
        }else{
            $("#doctor_id").empty();
        }      
       });
</script>

@endsection