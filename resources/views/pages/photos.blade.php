<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Фото') }}
        </h2>
    </x-slot>
    <x-u-section>
        <div class="max-w-xl">
            <section>
                <div class="space-y-4 my-6">
                    
                    <x-input-label for="small_photo" :value="__('Маленьке квадратне фото')" />

                    @if(auth()->user()->getFirstMediaUrl('small_photos', 'small'))
                        <img src="{{ auth()->user()->getFirstMediaUrl('small_photos', 'small') }}" alt="">

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
                        
                        <x-text-input id="small_photo" name="small_photo" type="file"  />
                        <x-input-error class="mt-2" :messages="$errors->get('small_photo')" />
                            
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

            </section>
        </div>
    </x-u-section>
</x-app-layout>
