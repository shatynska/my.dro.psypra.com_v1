<x-layout>

@unless(count($specialists) == 0)
<div class="row">
@foreach($specialists as $specialist)
<x-specialist-card :specialist="$specialist" />
@endforeach
</div>
@else
<p>No specialist found</p>
@endunless

</x-layout>