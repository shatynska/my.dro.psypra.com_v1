@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => '
inline-flex items-center file:px-4 file:py-2 file:bg-gray-200 file:border file:border-solid file:shadow-0 file:border-gray-300 file:rounded-md file:font-semibold file:text-xs file:text-gray-700 file:uppercase file:tracking-widest file:hover:bg-gray-100 file:cursor-pointer
text-sm text-gray-500 border-gray-300']) !!}>
