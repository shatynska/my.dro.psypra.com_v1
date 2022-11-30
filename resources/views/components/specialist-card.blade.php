@props(['specialist'])

<x-card class="card">
<a href="/specialists/{{$specialist->id}}" class="link-dark">
    <img src="{{asset('/images/'.$specialist->id.'.png')}}" class="card-img-top" alt="">
    <div class="card-body">
    <h6 class="card-title">{{$specialist->name}} {{$specialist->last_name}}</h6>
    <span class="card-subtitle">психолог, психотерапевт</span>
</a>
</div>
</x-card>