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
                    $contacts = $specialist->{Str::camel($database)};
                @endphp

                @if($contacts->count() != 0)
                
                    @foreach($contacts as $contact)

                        <form method="post" action="{{ route('contacts.' . $database . '.update', $contact) }}" class="space-y-2">
                            @csrf
                            @method('patch')

                            <div>
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $contact->title)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('title', $database)" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Редагувати') }}</x-primary-button>
                            </div>
                            
                        </form>

                        <form method="post" action="{{ route('contacts.' . $database . '.destroy', $contact ) }}" class="space-y-2 pb-8">
                            @csrf
                            @method('delete')
                            <x-primary-button>{{ __('Видалити') }}</x-primary-button>
                        </form>

                    @endforeach

                    <h3 class="text-sm font-small text-gray-900">
                        {{ __('Додати ще один ' . $contactType->title) }}
                    </h3>

                @endif

                <form method="post" action="{{ route('contacts.' . $database . '.store') }}" class="space-y-2">
                    @csrf
                    @method('post')

                    <div>
                        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required />
                        <x-input-error class="mt-2" :messages="$errors->$database->get('title')" />
                    </div>  
                    
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Додати') }}</x-primary-button>
                    </div>
                    
                </form>

            </div>

        </x-u-section>

    @endforeach

</x-app-layout>
