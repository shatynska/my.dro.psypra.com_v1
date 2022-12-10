@props(['specialist'])

<div>
    @php $attributesArray = [1, 3, 4, 5, 6] @endphp

    @foreach($attributesArray as $attributesItem)

        @php 
        $attributes = DB::table('attributes')->find($attributesItem); 
        $database = $attributes->database 
        @endphp

        <div>

            <a href="{{ route('attributes.index', ['attributes' => $database ]) }}" >
                <h6>
                    {{ $attributes->title }}
                </h6>
            </a>

            <p class="ps-4">
                @foreach($specialist->$database as $attribute)
                <a href="{{ route('attributes.show', ['attributes' => $database, 'attribute' => $attribute->id ]) }}" >{{ $attribute->title }}</a>@if (!$loop->last), @endif
                @endforeach
            </p>

        </div>

    @endforeach

</div>