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
                    Add Investigation Against Patient
                    <a class="btn btn-sm btn-primary m-b-10  pull-right" href="{{route('investigationPatient.index')}}">
                        <i class="fa fa-list"></i> All Investigation
                    </a>
                </header>
                <div class="panel-body">
                    <form enctype="multipart/form-data" method="post" action="{{route('investigationPatient.store')}}">
                        @include('investigation-patient.form')
                        <button type="submit" class="btn btn-info">Submit</button>
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
    <script>
     var patients = {!! json_encode($patients->toArray()) !!};
    $('#patient').on("change",function(){
        var patient_id=$('#patient').val();
        patients.forEach(function(item){
           if(patient_id==item.id){
               if(item.middle_name==null){
                   var middle_name="";
               }else{
                   var middle_name=item.middle_name;
               }
              
               $('#name').val(item.first_name+" "+middle_name+" "+item.last_name);
               $('#address').val(item.address+" , "+item.street_name+" , "+item.locality+" ,"+item.pin);
           }
       });

      
    });
   
      
        var remove_investigation_button = '<button type="button" class="btn btn-danger" onclick="removeApplicant(this)">' +
            '<i class="fa fa-trash-o"></i>' +
            '</button>';

        function addMoreInvestigation() {

            // $(".remove_applicant").html('');
            var clone_data = $(".investigation:last").clone();
            $(clone_data).find("input, select, textarea").val("");
            $(clone_data).find(".remove_investigation").html(remove_investigation_button);
            $(clone_data).hide();
            var clone_data = $(".investigation:last").after(clone_data);
            $(".investigation:last").show("slow");

        }
        removeApplicant = function(obj) {
            console.log("remove button clicked");
            if ($(".investigation").length == 1) {
                alert("Atleast one applicant required.");
                return false;
            }
            $(obj).parents(".investigation").hide("slow", function() {
                $(this).remove();
            });

        }
    </script>
    <script>
        $(document).on("change", ".medical_test_id", function() {
            var id=$(this).val();
            var $this = $(this);
            
            $.ajax({
               type:'GET',
               url:'{{URL::route('getmedicaltestamount')}}',
              data:{'medical_test_id':id,'_token': $('input[name=_token]').val()},
              dataType:'text',
              success:function(data){
                  console.log(data);
                  
                   $this.parents(".investigation").find('.amount').val(data);
                
              },error:function(){
                  console.log("error");
              }
            });
    
        
        });
        
       
    
    </script>
    @endsection