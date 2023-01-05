
@props(['attribute', 'specialist'])


<fieldset class="py-2 border border-gray-300 rounded-md shadow-sm">

<legend class="block pr-2 font-medium text-sm text-gray-700">{{ Str::ucfirst($attribute->title) }}</legend>

@php
    $pivot_attribute = $specialist
        ->{$attribute->database};
@endphp

@foreach (DB::table($attribute->database)->get() as $attribute_item)
    <div>
        @php
        $checked = $pivot_attribute
            ->firstWhere('id', $attribute_item->id);
        @endphp
        <x-checkbox-input type="checkbox" :checked="old('id', $checked)" name="{{ $attribute->database }}_{{ $attribute_item->id }}"  id="{{ $attribute->database }}_{{ $attribute_item->id }}" />
        <label for="{{ $attribute->database }}_{{ $attribute_item->id }}"> {{ $attribute_item->title }}
        </label>
    </div>
@endforeach

<x-input-error class="mt-2" :messages="$errors->get('{{ $attribute->database }}')" />

</fieldset>