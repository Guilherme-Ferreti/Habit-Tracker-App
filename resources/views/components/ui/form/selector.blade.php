@props(['id', 'label', 'name', 'options' => [], 'errorKey' => null])

<x-ui.form.input-wrapper>
    @if ($label)
        <x-ui.form.label for="{{ $id }}" text="{{ $label }}" />
    @endif

    <div class="flex flex-wrap gap-2">
        @foreach ($options as $option)
            <label
                class="rounded-lg bg-gray-100 p-3 text-sm font-medium text-gray-600 has-checked:bg-blue-600 has-checked:text-white"
                for="{{ $id }}-{{ $loop->index }}"
            >
                <input
                    {{ $attributes->wire('model') }}
                    class="sr-only"
                    type="radio"
                    id="{{ $id }}-{{ $loop->index }}"
                    name="{{ $name }}"
                    value="{{ $option['value'] }}"
                />
                {{ $option['label'] }}
            </label>
        @endforeach
    </div>

    @error($errorKey ?? $name)
        <x-ui.form.error-message :message="$message" />

    @enderror
</x-ui.form.input-wrapper>
