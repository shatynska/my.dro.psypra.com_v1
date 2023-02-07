<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Фото') }}
        </h2>
    </x-slot>


    @foreach($photos as $photo)

        <x-u-section>

            <div class="max-w-xl">

                <h2 class="text-lg font-medium text-gray-900">
                    {{ __($photo['description']) }}
                </h2>
    
                @if($specialist->getFirstMediaUrl($photo['title'].'_photos', $photo['title']))
                    
                    <img src="{{ $specialist->getFirstMediaUrl($photo['title'].'_photos', $photo['title']) }}" alt="">

                    <form method="POST" action="{{ route('photos.destroy',  $photo['title'] ) }}">
                        @csrf
                        @method('DELETE')
                            
                        <x-primary-button>{{ __('Delete') }}</x-primary-button>
                    </form>

                    <div>або</div>

                @endif

                <form method="POST" action="{{ route('photos.store', $photo['title'] ) }}" enctype="multipart/form-data" class="space-y-2">
                    @csrf
                    
                    <x-text-input id="{{ $photo['title'] }}_photo" name="{{ $photo['title'] }}_photo" type="file"  />
                    <x-input-error class="mt-2" :messages="$errors->get($photo['title'].'_photo')" />
                        
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Upload') }}</x-primary-button>
                        
                        @if (session('status') === 'main-updated')
                        <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600"
                        >{{ __('Loaded.') }}</p>
                        @endif
                    </div>

                </form>

            </div>

        </x-u-section>

    @endforeach

</x-app-layout>
