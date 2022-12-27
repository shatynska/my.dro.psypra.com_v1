
@props(['attribute'])

<fieldset class="py-2 border border-gray-300 rounded-md shadow-sm">
<legend class="block pr-2 font-medium text-sm text-gray-700">{{ Str::ucfirst($attribute->title) }}</legend>
    @foreach (DB::table($attribute->database)->get() as $attribute_item)
        <div>
        <x-checkbox-input type="checkbox" name="{{ $attribute->database }}_{{ $attribute_item->id }}"  id="{{ $attribute->database }}_{{ $attribute_item->id }}" />
        <label for="{{ $attribute->database }}_{{ $attribute_item->id }}"> {{  $attribute_item->title }}</label>
        </div>
    @endforeach
<x-input-error class="mt-2" :messages="$errors->get('{{ $attribute->database }}')" />
</fieldset>