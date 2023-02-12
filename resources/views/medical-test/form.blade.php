@csrf
<div class="form-group">
    <label for="name"> Medical test Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Test Name"value="@isset($medical_test){{ $medical_test->name }}@endisset">
</div>
<div class="form-group">
    <label for="name"> Amount</label>
    <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount"value="@isset($medical_test){{$medical_test->amount}}@endisset">
</div>