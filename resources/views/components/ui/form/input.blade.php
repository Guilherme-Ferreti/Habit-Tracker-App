@props(['label', 'type' => 'text', 'id', 'name', 'placeholder', 'errorKey' => null])

<x-ui.form.input-wrapper>
    @if ($label)
        <x-ui.form.label
            for="{{ $id }}"
            text="{{ $label }}"
        />
    @endif

    <input
        {{ $attributes->wire('model') }}
        class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-900 transition-all focus:border-transparent focus:ring-2 focus:ring-blue-600 focus:outline-none"
        type="{{ $type }}"
        id="{{ $id }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
    />

    @error($errorKey ?? $name)
        <x-ui.form.error-message :message="$message" />
    @enderror
</x-ui.form.input-wrapper>
