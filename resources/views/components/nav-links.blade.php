@props(['navTag', 'navLinks'])

    @foreach ($navLinks as $navLink)

        @if($navTag === 'x-nav-link')
            <x-nav-link :component="$navTag" :href="route( $navLink->route . '.index' )" :active="request()->routeIs( $navLink->route . '.*' )">
                {{ $navLink->title }}
            </x-nav-link>
        @else
            <x-responsive-nav-link :component="$navTag" :href="route( $navLink->route . '.index' )" :active="request()->routeIs( $navLink->route . '.*' )">
                {{ $navLink->title }}
            </x-responsive-nav-link>
        @endif
        
    @endforeach

