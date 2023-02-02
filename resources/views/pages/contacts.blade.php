<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Контакти') }}
        </h2>

    </x-slot>

    @foreach($contactTypes as $contactType)
        <x-u-section>
            <div class="max-w-xl">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __($contactType->title) }}
                </h2>

                <form method="post" action="{{ route('contacts.update') }}" class="space-y-2">
                    @csrf
                    @method('patch')

                    <div>
                        <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $specialist->phone)" required autocomplete="phone" />
                        <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                    </div>  
                    
                    
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Редагувати') }}</x-primary-button>

                    </div>
                    
                </form>

                
                <form method="post" action="{{ route('contacts.destroy') }}" class="space-y-2">
                    @csrf
                    @method('delete')

                    <x-primary-button>{{ __('Видалити') }}</x-primary-button>
                </form>


                <form method="post" action="{{ route('contacts.store') }}" class="space-y-2">
                    @csrf

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Додати') }}</x-primary-button>

                    </div>
                    
                </form>
   
            </div>
        </x-u-section>
    @endforeach

</x-app-layout>
