<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Мій підхід') }}
        </h2>
    </x-slot>

    <x-u-section>
        <div class="max-w-xl">
            <section>

                <form method="post" action="{{ route('method.update') }}" class="space-y-6">
                    @csrf
                    @method('patch')

                    <div>
                        <x-input-label for="text" :value="__('Мій підхід')" />
                        <textarea name="text" id="text"  rows="16" class="mt-1 block w-full text-gray-700 border-gray-300">{{ $specialist->method }}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('method')" />
                    </div>
 
                    
                    
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>

                        @if (session('status') === 'main-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                            >{{ __('Saved') }}</p>
                        @endif
                    </div>
                    
                </form>
            </section>
        </div>
    </x-u-section>

</x-app-layout>


