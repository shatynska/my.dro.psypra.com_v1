<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Фото') }}
        </h2>
    </x-slot>
    <x-u-section>
        <div class="max-w-xl">
            <section>
                @foreach($photos as $photo)
                <div class="space-y-2 my-6">
                    
                    <x-input-label for="{{ $photo[0] }}_photo" :value="__($photo[1])" />

                    @if(auth()->user()->getFirstMediaUrl($photo[0].'_photos', $photo[0]))
                        <img src="{{ auth()->user()->getFirstMediaUrl($photo[0].'_photos', $photo[0]) }}" alt="">

                        <form method="post" action="{{ route('photos.update') }}">
                            @csrf
                            @method('delete')                   
                            <x-button>{{ __('Видалити') }}</x-button>
                        </form>
                        <div>або</div>
                    @endif
 
                    <form method="post" action="{{ route('photos.update') }}" enctype="multipart/form-data" class="space-y-2">
                        @csrf
                        @method('patch')
                        
                        <x-text-input id="{{ $photo[0] }}_photo" name="{{ $photo[0] }}_photo" type="file"  />
                        <x-input-error class="mt-2" :messages="$errors->get($photo[0].'_photo')" />
                            
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Завантажити') }}</x-primary-button>
                            
                            @if (session('status') === 'main-updated')
                            <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600"
                            >{{ __('Завантажено.') }}</p>
                            @endif
                        </div>
                    </form>

                </div>

                <hr />

                @endforeach

            </section>
        </div>
    </x-u-section>
</x-app-layout>
