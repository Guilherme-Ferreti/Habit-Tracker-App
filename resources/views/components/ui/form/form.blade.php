<form {{ $attributes->class(['space-y-5']) }}>
    {{ $slot }}

    @if (!$footer->isEmpty())
        <div class="flex gap-3 pt-4">{{ $footer }}</div>
    @endif
</form>
