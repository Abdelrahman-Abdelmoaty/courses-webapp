@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'focus:border-gray-500
focus:ring-gray-500 rounded-md shadow-sm bg-secondary bg-gray-800 border-gray-700']) !!}>