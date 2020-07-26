@if(session()->has('error-message'))
<div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {!! session()->get('error-message') !!}
</div>
@endif
