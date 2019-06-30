@foreach(['danger', 'warning', 'success', 'info'] as $msg)
    @if(session()->get($msg))
        <div class="flash-message">
            <p class="alert alert-{{ $msg }}">
                {{ session()->get($msg) }}
            </p>
        </div>
    @endif
@endforeach
