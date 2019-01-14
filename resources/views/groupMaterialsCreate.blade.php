@extends('include.main')

@section('content')
      
<section class="content">

    <div class="container">

        <div class="row">
        
            <div class="col">

                <h1>Grupy materiałów - dodaj</h1>

                <form method="POST" action="/grupy_materialow/dodaj">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="name">Nazwa</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Wpisz nazwę grupy materiałów" value="{{old('name')}}" required />
                    </div>

                    <div class="form-group">
                        <label for="parent_group_id">Wybierz grupę nadrzędną </label>
                        <select class="form-control" id="parent_group_id" name="parent_group_id">
                            <option value="">Brak grupy nadrzędnej</option>
                            @if($groups->isNotEmpty())
                                @foreach($groups as $value)
                                    @if (old('parent_group_id') == $value->id)
                                        <option value="{{$value->id}}" selected>{{$value->name}}</option>    
                                    @else
                                     <option value="{{$value->id}}">{{$value->name}}</option> 
                                    @endif                                             
                                @endforeach                           
                            @endif
                        </select>
                    </div>

                    @if ($errors->any())      
                        @include('include.errors')
                    @endif
                    
                    <button type="submit" class="btn btn-primary">Dodaj</button>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection