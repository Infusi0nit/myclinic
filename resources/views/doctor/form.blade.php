@csrf
<div class="row">

    <div class="col-md-4 form-group">
        <label for="firstName">First Name</label>
        <input type="text" placeholder="First Name" class="form-control" name="first_name" @isset($doctor) value="{{$doctor->first_name}}" @endisset>
    </div>

    <div class="col-md-4 form-group">
        <label for="middleName">Middle Name</label>
        <input type="text" placeholder="Middle Name" class="form-control" name="middle_name"@isset($doctor) value="{{$doctor->middle_name}}" @endisset>
    </div>

    <div class="col-md-4 form-group">
        <label for="lastName">Last Name</label>
        <input type="text" placeholder="Last Name" class="form-control" name="last_name"@isset($doctor) value="{{$doctor->last_name}}" @endisset>
    </div>
</div>
<div class="row">

    <div class="col-md-4 form-group">
        <label for="mobile">Mobile No:</label>
        <input type="text" placeholder="Mobile" class="form-control" name="mobile"@isset($doctor) value="{{$doctor->mobile_no}}" @endisset>
    </div>

    <div class="col-md-4 form-group">
        <label for="email">Email:</label>
        <input type="email" placeholder="Email" class="form-control" name="email"@isset($doctor) value="{{$doctor->email}}" @endisset>
    </div>
    <div class="form-group col-md-4">
        <label for="department">Department</label>
        <select id="department" name="department" class="form-control">
            <option selected>-- Please Select Department --</option>
            @foreach($departments as $key => $department)
            <option value="{{$department->id}}" @isset($doctor) {{($doctor->department_id==$department->id)? 'selected':''}} @endisset>{{$department->name}}</option>
            @endforeach
        </select>
    </div>

</div>
<div class="row">
    <div class="col-md-4 form-group">
        <label for="photo">Upload Image</label>
        <input type="file" class="form-control-file" id="image" name="image">@isset($doctor) <image scr="{{'uploads/doctorimage/'.$doctor->image_name}}"></a> @endisset
    </div>
    <div class="form-group col-md-4">
        <label for="gender">Gender</label>
        <select id="gender" name="gender" class="form-control">
            <option selected>-- Please Select gender --</option>
            <option value="0" @isset($doctor){{$doctor->gender==0?'selected':''}} @endisset > Male</option>
            <option value="1"@isset($doctor){{$doctor->gender==1?'selected':''}} @endisset>

            Female</option>
            <option value="2"@isset($doctor){{$doctor->gender==2?'selected':''}} @endisset>Other</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        <label for="education">Educational Qualification</label>
        <textarea class="form-control" id="qualification" name="qualification" rows="3" @isset($doctor) value="{{$doctor->educational_qualification}}"@endisset> @isset($doctor) {{$doctor->educational_qualification}} @endisset</textarea>
    </div>
</div>