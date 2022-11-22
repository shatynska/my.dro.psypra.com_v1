@extends('layout')

@section('content')

<h1>
    {{$specialist['name']}}
</h1>
<p>
    {{$specialist['about_text']}}
</p>

@endsection

