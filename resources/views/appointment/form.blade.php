@csrf

<input type="hidden" class="form-control" name="patient_id" value="{{ $patient_details->id}}">
<div class="form-group">
    <label for="consultent_name" class="col-lg-4 col-sm-2 control-label">Department</label>
    <div class="col-lg-6">

        <select id="department_id" name="department_id" id="department_id" class="form-control department_id">

            <option selected>-- Please Select Department --</option>

            @foreach($departments as $key => $department)

            <option value="{{$department->id}} @isset($appointment){{$appointment->department_id==$department->id?'selected':''}} @endisset">{{$department->name}}</option>
            @endforeach
        </select>

    </div>
</div>

<div class="form-group">
    <label for="consultent_name" class="col-lg-4 col-sm-2 control-label">Consultent Name</label>
    <div class="col-lg-6">
        <select id="doctor_id" name="doctor_id" class="form-control doctor_id">
            <option value='0'>-- Select Consultent --</option>
        </select>

    </div>
</div>
<div class="form-group">
    <label for="fee_type" class="col-lg-4 col-sm-2 control-label">Fee Type</label>
    <div class="col-lg-6">
        <select id="fee_head_id" name="fee_head_id" class="form-control fee_head">
            <option selected>-- Please Select Fee Type --</option>
            @foreach($fee_heads as $key => $fee_head)
            <option value="{{$fee_head->id}}">{{$fee_head->name}}</option>
            @endforeach
        </select>

    </div>
</div>
<div class="row">
    <div class="form-group">
        <label for="inputEmail1" class="col-lg-4 col-sm-2 control-label">Amount</label>
        <div class="col-lg-6">
            <input type="number" class="form-control amount" name="amount" id="amount" placeholder="Amount">

        </div>
    </div>
</div>