<div class="alert alert-{{ $theme }}" role="alert">
    {{ $caption }}
    @if($closeable)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>