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
                    
                    <x-input-label for="{{ $photo['title'] }}_photo" :value="__($photo['description'])" />

                    @if($specialist->getFirstMediaUrl($photo['title'].'_photos', $photo['title']))
                        <img src="{{ $specialist->getFirstMediaUrl($photo['title'].'_photos', $photo['title']) }}" alt="">

                        <form method="post" action="{{ route('photos.destroy') }}">
                            @csrf
                            @method('delete')
                             
                            <input type="hidden" name="type" value="{{ $photo['title'] }}"  />
                            <x-primary-button>{{ __('Видалити') }}</x-primary-button>
                        </form>
                        <div>або</div>
                    @endif
 
                    <form method="post" action="{{ route('photos.update') }}" enctype="multipart/form-data" class="space-y-2">
                        @csrf
                        @method('patch')
                        
                        <x-text-input id="{{ $photo['title'] }}_photo" name="{{ $photo['title'] }}_photo" type="file"  />
                        <input type="hidden" name="type" value="{{ $photo['title'] }}"  />
                        <x-input-error class="mt-2" :messages="$errors->get($photo['title'].'_photo')" />
                            
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
