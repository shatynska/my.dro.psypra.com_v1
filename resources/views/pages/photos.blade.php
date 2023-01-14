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
                        <x-text-input id="small_photo" name="small_photo" type="file" class="mt-1 block w-full" :value="old('small_photo', $specialist->small_photo)" />
                        <x-input-error class="mt-2" :messages="$errors->get('small_photo')" />
                    </div> 
                    <img src={{ asset('storage/photos/' . Auth::user()->id . '/small.jpg') }} alt="" />

                    <div>
                        <x-input-label for="big_photo" :value="__('Велике вертикальне фото')" />
                        <x-text-input id="big_photo" name="big_photo" type="file" class="mt-1 block w-full" :value="old('big_photo', $specialist->small_photo)" />
                        <x-input-error class="mt-2" :messages="$errors->get('big_photo')" />
                    </div>
                    <img src={{ asset('storage/photos/' . Auth::user()->id . '/big.jpg') }} alt="" />

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>

                        @if (session('status') === 'main-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>

                </form>

            </section>
        </div>
    </x-u-section>
</x-app-layout>
