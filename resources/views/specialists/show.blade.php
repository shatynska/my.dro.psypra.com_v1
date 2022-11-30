<x-layout>

<div class="row">
<div class="col">
    <h1>
        {{$specialist->name}} {{$specialist->last_name}}
    </h1>
</div>
</div>
<div class="row">
<div class="col-md-6 col-xl-4">
    <img src="{{asset('images/shatynska_big.png')}}" alt="" class="img-fluid">
</div>


<div class="col-6">
    <p>
        {{$specialist->year_of_birth}}
    </p>
    <p>
        {{$specialist->year_of_starting}}
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


