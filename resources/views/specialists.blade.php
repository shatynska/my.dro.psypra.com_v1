@extends('layout')

@section('content')

<h1>
    {{$heading}}
</h1>
@unless(count($specialists) == 0)
<div class="row">
@foreach($specialists as $specialist)
<x-specialist-card :specialist="$specialist" />
@endforeach
</div>
@else
<p>No specialist found</p>
@endunless

@endsection