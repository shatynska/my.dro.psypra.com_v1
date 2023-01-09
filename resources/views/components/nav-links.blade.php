@props(['navTag', 'navLinks'])

    @foreach ($navLinks as $navLink)

        @if($navTag === 'x-nav-link')
            <x-nav-link :component="$navTag" :href="route( $navLink->route )" :active="request()->routeIs( $navLink->route )">
                {{ $navLink->title }}
            </x-nav-link>
        @else
            <x-responsive-nav-link :component="$navTag" :href="route( $navLink->route )" :active="request()->routeIs( $navLink->route )">
                {{ $navLink->title }}
            </x-responsive-nav-link>
        @endif

        {{-- <x-dynamic-component :component="$navTag" :href="route( $navLink->route )" :active="request()->routeIs( $navLink->route )">
            {{ $navLink->title }}
        </x-dynamic-component> --}}
        
    @endforeach

