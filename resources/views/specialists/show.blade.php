<x-layout>

{{-- name and specialty --}}
<div class="row">
    <div class="col">
        <h3 class="secondary-color ps-4">
            @foreach($specialist->specialties as $specialty)
            {{ $specialty->title }}@if (!$loop->last), @endif
            @endforeach
        </h3>
        <h1>
            {{ $specialist->name }} {{ $specialist->last_name }}
        </h1>
    </div>
</div>

<div class="row">
    {{-- image --}}
    <div class="col-md-6 col-xl-4 my-4">
        <img src={{ asset('images/'.$specialist->id.'_big.png') }} alt="" class="img-fluid my-2">
    </div>


    <div class="col-md-6 col-xl-4 my-4">
        {{-- forms --}}
        <div>
            <h6>
                спеціальності
            </h6>
            <p class="ps-4">
                @foreach($specialist->specialties as $specialty)
                <a href="{{ route('attributes.index') }}" >{{ $specialty->title }}</a>@if (!$loop->last), @endif
                @endforeach
            </p>
        </div>

        {{-- forms --}}
        <div>
            <h6>
                форми роботи
            </h6>
            <p class="ps-4">
                @foreach($specialist->quantities as $quantity)
                {{ $quantity->title }}@if (!$loop->last), @endif
                @endforeach
            </p>
        </div>

        {{-- ages --}}
        <div>
            <h6>
                вікові групи
            </h6>
            <p class="ps-4">
                @foreach($specialist->ages as $age)
                {{ $age->title }}@if (!$loop->last), @endif
                @endforeach
            </p>
        </div>

        {{-- durations --}}
        <div>
            <h6>
                тривалість
            </h6>
            <p class="ps-4">
                @foreach($specialist->durations as $duration)
                {{ $duration->title }}@if (!$loop->last), @endif
                @endforeach
            </p>
        </div>

        {{-- directions --}}
        <div>
            <h6>
                напрямки терапії
            </h6>
            <p class="ps-4">
                @foreach($specialist->directions as $direction)
                {{ $direction->title }}@if (!$loop->last), @endif
                @endforeach
            </p>
        </div>

        {{-- how old --}}
        <div>
            <h6>
                вік
            </h6 class="ps-4">
                <p class="manrope">
                @php 
                    echo 2022-$specialist->year_of_birth 
                @endphp 
                р.
            </p>
        </div>

        {{-- begin --}}
        <div>
            <h6>
            початок практиктики 
            </h6 class="ps-4">
                <p>
            {{ $specialist->year_of_starting }}р.
            </p>
        </div>
        
    </div>

    {{-- contacts --}}
    <div class="col-md-6 col-xl-4 my-4">
        <div class="my-2 d-flex gap-4">
            <a href="">
                <img src={{ asset('images/programs/messenger.png') }} alt="">
            </a>
            <a href="">
                <img src={{ asset('images/programs/telegram.png') }} alt="">
            </a>
            <a href="">
                <img src={{ asset('images/programs/zoom.png') }} alt="">
            </a>
            <a href="">
                <img src={{ asset('images/programs/skype.png') }} alt="">
            </a>

        </div>
        <div class="my-4">
            <h2 class="primary-color">+380978976847</h2>
        </div>
    </div>

</div>

<div class="row">
    <div class="col">
        <p>
            {{ $specialist->about_text }}
        </p>
        <p>
            {{ $specialist->education_text }}
        </p>
        <p>
            {{ $specialist->doesnt_work_with }}
        </p>
    </div>
</div>

</x-layout>


