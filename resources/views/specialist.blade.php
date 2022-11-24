@extends('layout')

@section('content')
<div class="row">

<div class="col-4">
    <img src="{{asset('images/no-image.jpg')}}" alt="" class="img-fluid">
</div>


<div class="col-8">
    <h1>
        {{$specialist->name}} {{$specialist->last_name}}
    </h1>
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

@endsection

