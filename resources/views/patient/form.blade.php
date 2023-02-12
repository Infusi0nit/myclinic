@csrf
<div class="row">

    <div class="col-md-4 form-group">
        <label for="firstName">First Name</label>
        <input type="text" placeholder="First Name" class="form-control" name="first_name" id="first_name" value="@isset($patient){{$patient->first_name}}@endisset" required>
    </div>

    <div class="col-md-4 form-group">
        <label for="middleName">Middle Name</label>
        <input type="text" placeholder="Middle Name" class="form-control" name="middle_name" value="@isset($patient){{$patient->middle_name}}@endisset">
    </div>

    <div class="col-md-4 form-group">
        <label for="lastName">Last Name</label>
        <input type="text" placeholder="Last Name" class="form-control" name="last_name" value="@isset($patient){{$patient->last_name}}@endisset" requred>
    </div>
</div>
<div class="row">

    <div class="col-md-4 form-group">
        <label for="mobile">Mobile No</label>
        <input type="number" placeholder="Mobile" class="form-control" name="mobile" value="@isset($patient){{$patient->mobile_no}}@endisset"required>
    </div>

    <div class="col-md-4 form-group">
        <label for="email">Email</label>
        <input type="email" placeholder="Email" class="form-control" name="email"  value="@isset($patient){{$patient->email}}@endisset" required>
    </div>
    <div class="col-md-4 form-group">
        <label for="age">Age</label>
        <input type="number" placeholder="Age" class="form-control" name="age" value="@isset($patient){{$patient->age}}@endisset"required>
    </div>


</div>
<div class="row">
    <div class="form-group col-md-4">
        <label for="gender">Gender</label>
        <select id="gender" name="gender" class="form-control" required>
            <option selected>-- Please Select gender --</option>
            <option value="0">Male</option>
            <option value="1">Female</option>
            <option value="2">Other</option>
        </select>
    </div>
</div>
<hr>

<div class="row">
    <div class="form-group col-md-3">
        <label for="address">Address</label>
        <input type="text" placeholder="Address" class="form-control" name="address"  value="@isset($patient){{$patient->address}}@endisset" required>


    </div>
    <div class="form-group col-md-3">
        <label for="street_name">Street Name</label>
        <input type="text" placeholder="Street_name" class="form-control" name="street_name" value="@isset($patient){{$patient->street_name}}@endisset"  required>

    </div>
    <div class="form-group col-md-3">
        <label for="city">Locality</label>
        <input type="text" placeholder="Locality" class="form-control" name="locality"  value="@isset($patient){{$patient->locality}}@endisset" required>


    </div>
    <div class="form-group col-md-3">
        <label for="pin">Pin</label>
        <input type="number" placeholder="pin" class="form-control" name="pin"  value="@isset($patient){{$patient->pin}}@endisset" required>


    </div>
</div>