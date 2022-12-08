@props(['specialist'])

<x-card class="card">
<a href={{ route('specialists.show', ['specialist' => $specialist->id]) }} class="text-decoration-none">
    <img src={{ asset('/images/'.$specialist->id.'.png') }} class="card-img-top" alt="">
    <div class="card-body">
    <h4 class="card-title">{{ $specialist->name }} {{ $specialist->last_name }}</h4>
    <span class="card-subtitle color-grey">
        @foreach($specialist->specialties as $specialty)
            {{ $specialty->title }}@if (!$loop->last),&nbsp; @endif
        @endforeach
    </span>
</a>
</div>
</x-card>