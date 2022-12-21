<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <x-u-section>
        <div class="max-w-xl">
            @include('profile.partials.update-profile-information-form')
        </div>
    </x-u-section>

    <x-u-section>
        <div class="max-w-xl">
            @include('profile.partials.update-password-form')
        </div>
    </x-u-section>

    <x-u-section>
        <div class="max-w-xl">
            @include('profile.partials.delete-user-form')
        </div>
    </x-u-section>

</x-app-layout>
