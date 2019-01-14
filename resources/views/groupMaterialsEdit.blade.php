@extends('include.main')

@section('content')
      
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col">

                <h1>Grupy materiałów - edycja</h1>

                <form method="POST" action="/grupy_materialow/edytuj/{{$group->id}}">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="name">Nazwa</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Wpisz nazwę grupy materiałów" value="{{$group->name}}" required />
                    </div>

                    <div class="form-group">
                        <label for="parent_group_id">Wybierz grupę nadrzędną (lista możliwych do ustawienia grup materiałów)</label>
                        <select class="form-control" id="parent_group_id" name="parent_group_id">
                            <option value="">-- brak grupy nadrzędnej --</option>

                            @foreach($groups as $value)

                                @if($group->id == $value->id)
                                    @continue
                                @endif

                                @if($group->parent_group_id == $value->id)
                                    <option value="{{$value->id}}" selected>{{$value->name}}</option>
                                @else
                                    <option value="{{$value->id}}">{{$value->name}}</option> 
                                @endif 

                                <!-- @if(count($value->childs))
                                    @include('manageChildSelect',['childs' => $value->childs, 'group'=>$group])                        
                                @endif -->

                            @endforeach

                        </select>
                    </div>

                    @if ($errors->any())      
                        @include('include.errors')
                    @endif

                    <button type="submit" class="btn btn-primary">Zapisz</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
