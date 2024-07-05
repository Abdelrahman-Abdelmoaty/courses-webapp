@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-gray-400']) }}>
    {{ $value ?? $slot }}
</label>