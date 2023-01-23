<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Фото') }}
        </h2>
    </x-slot>
    <x-u-section>
        <div class="max-w-xl">
            <section>
                <form method="post" action="{{ route('photos.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')

                    <div>
                        <x-input-label for="small_photo" :value="__('Маленьке квадратне фото')" />
                        <img class="py-4" src="{{ auth()->user()->getFirstMediaUrl('small_photos', 'small') }}" alt="">
                        @if(auth()->user()->getFirstMediaUrl('small_photos', 'small'))
                            <x-button class="mr-4">{{ __('Видалити') }}</x-button>
                        @endif
                        <x-text-input id="small_photo" name="small_photo" type="file" />
                        <x-input-error class="mt-2" :messages="$errors->get('small_photo')" />
                    </div> 
                    <hr/>
                    <div>
                        <x-input-label for="big_photo" :value="__('Велике вертикальне фото')" />
                        <img class="py-4"  src="{{ auth()->user()->getFirstMediaUrl('big_photos', 'big') }}" alt="">
                        @if(auth()->user()->getFirstMediaUrl('big_photos', 'big'))
                            <x-button class="mr-4">{{ __('Видалити') }}</x-button>
                        @endif
                        <x-text-input id="big_photo" name="big_photo" type="file" />
                        <x-input-error class="mt-2" :messages="$errors->get('big_photo')" />
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
