@props(['checked' => false])

<input {{ $checked ? 'checked' : '' }} {!! $attributes->merge(['class' => 'p-2 ml-4 m-2 border-gray-300 checked:border-indigo-500 checked:ring-indigo-500 rounded-sm shadow-sm']) !!}>
