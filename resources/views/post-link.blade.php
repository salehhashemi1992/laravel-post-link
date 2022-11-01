<a href="#" {{ $attributes }} onclick="
@if($confirm) if (confirm(this.dataset.confirmMessage)) { @endif document.{{ $uniqueId }}.submit(); @if($confirm) } @endif
    event.returnValue = false; return false;" @if($confirm) data-confirm-message="{{ $confirm }}" @endif>
    {{ $slot }}
</a>

@if($attributes->has('inline-form'))
    <form name="{{ $uniqueId }}" action="{{ $url }}" method="POST" class="d-none">
        @csrf
        @method($method)
    </form>
@else
    @push('d-none')
        <form name="{{ $uniqueId }}" action="{{ $url }}" method="POST" class="d-none">
            @csrf
            @method($method)
        </form>
    @endpush
@endif
