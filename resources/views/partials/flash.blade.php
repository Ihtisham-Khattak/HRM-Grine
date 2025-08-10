@php
    $alertStyle = 'padding: 1rem 1.25rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: 0.25rem; font-size: 1rem;';
    $alertColors = [
        'primary' => 'color: #084298; background-color: #cfe2ff; border-color: #b6d4fe;',
        'secondary' => 'color: #41464b; background-color: #e2e3e5; border-color: #d3d6d8;',
        'success' => 'color: #0f5132; background-color: #d1e7dd; border-color: #badbcc;',
        'danger' => 'color: #842029; background-color: #f8d7da; border-color: #f5c2c7;',
        'warning' => 'color: #664d03; background-color: #fff3cd; border-color: #ffecb5;',
        'info' => 'color: #055160; background-color: #cff4fc; border-color: #b6effb;',
        'light' => 'color: #636464; background-color: #fefefe; border-color: #fdfdfe;',
        'dark' => 'color: #141619; background-color: #d3d3d4; border-color: #bcbebf;',
    ];
@endphp

@foreach ($alertColors as $type => $colorStyle)
    @if ($message = Session::get($type))
        <div
            class="alert alert-{{ $type }}"
            id="flash-alert-{{ $type }}"
            role="alert"
            style="{{ $alertStyle }}{{ $colorStyle }}"
        >
            {{ $message }}
        </div>
    @endif
@endforeach

<script>
    setTimeout(function() {
        [
            'primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'
        ].forEach(function(type) {
            var alert = document.getElementById('flash-alert-' + type);
            if (alert) {
                alert.style.transition = 'opacity 0.5s';
                alert.style.opacity = '0';
                setTimeout(function() {
                    alert.style.display = 'none';
                }, 500);
            }
        });
    }, 3000);
</script>
