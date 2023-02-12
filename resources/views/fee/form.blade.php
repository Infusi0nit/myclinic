@csrf
<div class="form-group">
    <label for="name"> Fee Head</label>
    <select class="form-control show-tick" name="fee_head_id">
        <option value="">-- Please Select Fee Head --</option>
        @foreach($fee_heads as $fee_head)
        <option value="{{$fee_head->id}}" @isset($fee) {{($fee->fee_head_id==$fee_head->id)? 'selected':''}} @endisset>{{$fee_head->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <div class="form-line">
        <label>Amount</label>
        <input type="number" name="amount" class="form-control" @isset($fee) value="{{$fee->amount}}" @endisset required>
    </div>
</div>