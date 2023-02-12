@csrf
<div class="form-group">
    <label for="name"> Fee Head Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Fee Head Name" value="@isset($fee_head){{$fee_head->name}}@endisset">
</div>