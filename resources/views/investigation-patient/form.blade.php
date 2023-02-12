@csrf
<div class="form-group">
    <label for="patientno">Patient No </label>
    <select class="form-control" name="patient_id" id="patient">
        <option value="">-- Please Select Patient No --</option>
        @foreach($patients as $patient)
        <option value="{{$patient->id}}">{{ $patient->patients_no }}</option>
        @endforeach
    </select>
</div>
<div class="row">

    <div class="col-md-6 form-group">
        <label for="patient">Patient Name</label>
        <input type="text" placeholder="Patient Name" class="form-control" name="Patient_full_name" id="name">
    </div>

    <div class="col-md-6 form-group">
        <label for="middleName">Patient Address</label>
        <input type="text" placeholder="Patient Address" class="form-control" name="patient_full_address" id="address">
    </div>

</div>
<hr>
@if(isset($investigation)==true)
@foreach($investigation->investigation_details as $investigation_detail)
<div class="investigation">
    <div class="row">

        <div class="col-md-6 form-group">
            <label for="patient">Select Investigation Name</label>
            <select class="form-control medical_test_id" name="medical_tests[]" id="medical_test_id">
                <option value="">-- Please Select Investigation Name --</option>
                @foreach($medical_tests as $medical_test)
                <option value="{{$medical_test->id}}" @isset($investigation){{$investigation_detail->medical_test_id==$medical_test->id ? 'selected':''}} @endisset >{{ $medical_test->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6 form-group">
            <label for="amount">Amount</label>
            <input type="text" placeholder="amount" id="amount" class="form-control amount" name="amounts[]" value="@isset($investigation){{$investigation_detail->amount}} @endisset">
        </div>
        <div class="text-left col-md-offset-10 remove_investigation">
        </div>

    </div>
</div>

@endforeach
@endif
@if(isset($investigation)==false)
<div class="investigation">
    <div class="row">

        <div class="col-md-6 form-group">
            <label for="patient">Select Investigation Name</label>
            <select class="form-control medical_test_id" name="medical_tests[]" id="medical_test_id">
                <option value="">-- Please Select Investigation Name --</option>
                @foreach($medical_tests as $medical_test)
                <option value="{{$medical_test->id}}">{{ $medical_test->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6 form-group">
            <label for="amount">Amount</label>
            <input type="text" placeholder="amount" id="amount" class="form-control amount" name="amounts[]">
        </div>
        <div class="text-left col-md-offset-10 remove_investigation">
        </div>

    </div>
</div>
@endif

<br>
<div class="row m-b-10">
    <div class="text-left  col-md-offset-9">
        <button type="button" class="btn btn-primary" onclick="addMoreInvestigation()"><i class="fa fa-plus">

            </i>Add More Investigation</button>

    </div>

</div>