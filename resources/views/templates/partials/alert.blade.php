@if (Session::has('info'))
    <div class="alert alert-info">
        {{ Session::get('info')}}
    </div>
@endif