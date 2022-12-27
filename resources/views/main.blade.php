<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blue page') }}
        </h2>
    </x-slot>

    <x-u-section>
        <div class="max-w-xl">
            <section>
                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>

                <form method="post" action="{{ route('main.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')

                    <div>
                        <x-input-label for="name" :value="__('Ім\'я')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $specialist->name)" required autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div>
                        <x-input-label for="last_name" :value="__('Прізвище')" />
                        <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name', $specialist->last_name)" required autocomplete="last_name" />
                        <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                    </div>

                    {{-- fieldsets for specialties, forms, ages and so on --}}
                    @foreach($attributes as $attribute)
                    <x-form-fieldset :attribute="$attribute" />
                    @endforeach  
                    
                    
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>

                        @if (session('status') === 'main-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </section>
        </div>
    </x-u-section>
</x-app-layout>
