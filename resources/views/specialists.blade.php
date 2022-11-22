@extends('layout')

@section('content')
<h1>
    {{$heading}}
</h1>
@unless(count($specialists) == 0)
@foreach($specialists as $specialist)
<h3>
    <a href="/specialists/{{$specialist['id']}}">
        {{$specialist['name']}}
    </a>
</h3>
<p>
    {{$specialist['about_text']}}
</p>
@endforeach
@else
<p>No specialist found</p>
@endunless

@endsection