@foreach($childs as $child)
   
    @if($group->id == $child->id)
        @break
    @endif

    @if($group->parent_group_id == $child->id)
        <option value="{{$child->id}}" selected>{{$child->name}}</option> 
    @else
        <option value="{{$child->id}}">{{$child->name}}</option> 
    @endif     

    @if(count($child->childs))
            @include('manageChildSelect',['childs' => $child->childs])
    @endif

@endforeach
