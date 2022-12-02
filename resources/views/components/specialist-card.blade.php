@props(['specialist'])

<x-card class="card">
<a href="/specialists/{{$specialist->id}}" class="text-decoration-none">
    <img src="{{asset('/images/'.$specialist->id.'.png')}}" class="card-img-top" alt="">
    <div class="card-body">
    <h4 class="card-title">{{$specialist->name}} {{$specialist->last_name}}</h4>
    <span class="card-subtitle color-grey">психолог, психотерапевт</span>
</a>
</div>
</x-card>