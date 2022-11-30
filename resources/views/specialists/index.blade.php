<x-layout>

@unless(count($specialists) == 0)
<div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-5">
@foreach($specialists as $specialist)
<x-specialist-card :specialist="$specialist"/>
@endforeach
</div>
@else
<p>No specialist found</p>
@endunless

</x-layout>