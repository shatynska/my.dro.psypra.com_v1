<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Контакти') }}
        </h2>
    </x-slot>

    <x-u-section>
        <div class="max-w-xl">
            <section>

                <form method="post" action="{{ route('contacts.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')

                    <div>
                        <x-input-label for="phone" :value="__('Телефон')" />
                        <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $specialist->phone)" required autocomplete="phone" />
                        <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                    </div>  
                    
                    
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Зберегти') }}</x-primary-button>

                        @if (session('status') === 'main-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                            >{{ __('Збережено.') }}</p>
                        @endif
                    </div>
                    
                </form>
            </section>
        </div>
    </x-u-section>

</x-app-layout>
