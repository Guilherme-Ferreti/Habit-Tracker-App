@props(['id', 'name', 'options' => []])

<div class="flex flex-wrap gap-2">
    @foreach ($options as $option)
        <label
            class="rounded-lg bg-gray-100 p-3 text-sm font-medium text-gray-600 has-checked:bg-blue-600 has-checked:text-white"
        >
            <input class="sr-only" type="radio" id="{{ $id }}" name="{{ $name }}" value="{{ $option['value'] }}" />
            {{ $option['label'] }}
        </label>
    @endforeach
</div>
