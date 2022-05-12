@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
@endif
<br>
<div class="alert alert-danger print-error-msg" style="display:none">
    <ul></ul>
</div>
