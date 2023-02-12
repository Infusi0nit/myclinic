@if(!empty($notice))
<div class="alert alert-info">
<button data-dismiss="alert" class="close close-sm" type="button">
<i class="fa fa-times"></i>
</button>
<strong>{{$notice}}</strong> 
</div>
@endif
@if(!empty($success))
<div class="alert alert-success">
    <button data-dismiss="alert" class="close close-sm" type="button">
         <i class="fa fa-times"></i>
    </button>
    <strong>{{ $success}}</strong>.
</div>

@endif
@if(!empty($status))
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="alert {{ Session::get('alert-class', 'alert-info') }}">
                {{-- <i class="fe fe-check mr-2" aria-hidden="true"></i> --}}
                <button type="button" class="close" data-dismiss="alert"></button>
                {!! Session::get('status') !!}
            </div>
        </div>
    </div>
</div>
@endif
@if(!empty($error))
<div class="alert alert-block alert-danger">
<button data-dismiss="alert" class="close close-sm" type="button">
<i class="fa fa-times"></i>
</button>
<strong>{{$error}}</strong>
</div>
@endif


@if(!empty($errors->all()))
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{-- <strong><i class="fe fe-bell mr-2" aria-hidden="true"></i></strong>    --}}
                @foreach($errors->all() as $error)
                {{$error}}<br>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif