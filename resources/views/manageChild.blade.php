<ul>
@foreach($childs as $child)
	<li>
	    {{ $child->name }} 

	    @if(!$child->childs->isEmpty())
            @include('manageChild',['childs' => $child->childs])
        @endif

		@if(!$child->materials->isEmpty())
			<ul>
			@foreach($child->materials as $material)
				<li>
					{{ $material->name }} 
				</li>
			@endforeach
			</ul>
		@endif
	</li>
@endforeach
</ul>