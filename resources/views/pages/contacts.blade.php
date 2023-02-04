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
                @php
                $database = $contactType->database;
                $contacts = $specialist->$database;
                @endphp
                @if($contacts->count())
                @foreach($contacts as $contact)

                    <form method="post" action="{{ route('contacts.' . $database . '.update', $contact) }}" class="space-y-2">
                        @csrf
                        @method('patch')

                        <div>
                            <x-text-input id="title_{{ $contact->id }}" name="title" type="text" class="mt-1 block w-full" :value="old('title', $contact->title)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Редагувати') }}</x-primary-button>

                        </div>
                        
                    </form>

                    <form method="post" action="{{ route('contacts.' . $database . '.destroy', $contact ) }}" class="space-y-2">
                        @csrf
                        @method('delete')
                        <x-primary-button>{{ __('Видалити') }}</x-primary-button>
                    </form>
                    @endforeach
                @endif

                <form method="post" action="{{ route('contacts.' . $database . '.store') }}" class="space-y-2">
                    @csrf
                    @method('post')

                    <div>
                        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required />
                        <x-input-error class="mt-2" :messages="$errors->get('title')" />
                    </div>  
                    
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Додати') }}</x-primary-button>

                    </div>
                    
                </form>

            </div>
        </x-u-section>
    @endforeach

</x-app-layout>
