@csrf
<div class="form-group">
    <label for="name"> Department Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Department Name"value="@isset($department){{$department->name}}@endisset">
</div>