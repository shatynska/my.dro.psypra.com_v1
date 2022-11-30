<x-layout>

<div class="row">
<div class="col">
    <h1 class="mb-2">
        {{$specialist->name}} {{$specialist->last_name}}
    </h1>
    <h4 class="mb-2">
        @foreach($specialist->specialties as $specialty)
        {{ $specialty->title }}
        @endforeach
    </h4>
</div>

</div>
<div class="row">
<div class="col-md-6 col-xl-4 my-4">
    <img src="{{asset('images/'.$specialist->id.'_big.png')}}" alt="" class="img-fluid my-2">
</div>


<div class="col-md-6 col-xl-4 my-4">
    <div>
        <h6>
            форми роботи
        </h6>
        <p>
            @foreach($specialist->quantities as $quantity)
            {{ $quantity->title }}
            @endforeach
        </p>
    </div>

    <div>
        <h6>
            напрямки терапії
        </h6>
        <p>
            @foreach($specialist->directions as $direction)
            {{ $direction->title }}
            @endforeach
        </p>
    </div>

    <div>
        <h6>
            вікові групи
        </h6>
        <p>
            @foreach($specialist->ages as $age)
            {{ $age->title }}
            @endforeach
        </p>
    </div>

    <p>
        @php 
            echo 2022-$specialist->year_of_birth 
        @endphp 
        р.
    </p>
    <p>
        початок практиктики: {{$specialist->year_of_starting}}р.
    </p>
    <p>
        {{$specialist->about_text}}
    </p>
    <p>
        {{$specialist->education_text}}
    </p>
    <p>
        {{$specialist->doesnt_work_with}}
    </p>
</div>
</div>

</x-layout>


