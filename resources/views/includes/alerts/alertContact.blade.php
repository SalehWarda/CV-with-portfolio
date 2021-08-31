
@if (session('message'))
    <div class="alert alert-{{ session('alert-type') }} alert-dismissible fade show" role="alert" id="alert-message">
        {{ session('message') }}

    </div>
@endif
