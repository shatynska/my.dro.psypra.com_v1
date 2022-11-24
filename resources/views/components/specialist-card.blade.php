@props(['specialist'])

<x-card>
<a href="/specialists/{{$specialist['id']}}">
    <img src="{{asset('/images/no-image.jpg')}}" class="img-fluid my-2" alt="">
    <h6>{{$specialist->name}} {{$specialist->last_name}}</h6>
    <p>психолог, психотерапевт</p>
</a>
</x-card>