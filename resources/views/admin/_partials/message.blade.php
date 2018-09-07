@if (session()->has('message'))
    <div class="alert alert-success">
        <p>{!! session('message') !!}</p>
    </div>
@endif